<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengajuan;
use App\Http\Requests\UpdatePengajuan;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\ProductRequest;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use function PHPUnit\Framework\isEmpty;

class PengajuanController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'role:admin,company'], ['except' => ['show']]);
        $this->middleware(['auth', 'role:admin,company'], ['only' => ['show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // Variabels
        $company = Company::where('user_id', auth()->user()->id)->first();
        $search = $request['keyword'] ?? '';

        if (auth()->user()->role == 'admin') {
            if ($search != '') {
                $productRequests = ProductRequest::whereRelation('company', 'name', 'Like','%' . request('keyword') . '%')
                    ->orWhere('request_number', 'Like', '%' . request('keyword') . '%')
                    ->sortable()
                    ->with('company')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $productRequests = ProductRequest::sortable()
                    ->with('company')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }
        } else {
            if ($search != '') {
                $productRequests = ProductRequest::where('company_id', $company->id)
                    ->where('request_status', 'Like', '%' . request('keyword') . '%')
                    ->orWhere('request_number', 'Like', '%' . request('keyword') . '%')
                    ->sortable()
                    ->with('company')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $productRequests = ProductRequest::where('company_id', $company->id)
                    ->sortable()
                    ->with('company')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }
        }

        return view('requests-list', compact('productRequests', 'search'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = JobCategory::all();
        $companies = Company::all();

        return view('requests-add', compact('categories', 'companies'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengajuan  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengajuan $request)
    {
        // dd($request->file('surat_permohonan')->store('post_files'));
        $now = Carbon::now();
        $user = auth()->user();
        $product_qty = $request->product_qty;
        $name = $request->name;
        $product_types = $request->product_type;
        $product_specification = $request->product_specification;
        // $request->file('surat_permohonan')->store('post_files');
        // $request->file('lampiran_permohonan')->store('post_files'); 

        //Ambil ID Perusahaannya di Tabel master_perusahaans
        $getRequestingCompanyID = DB::connection('mysql2')->table('master_perusahaans')->select('id')->where('email_pusat','=',$user->email)->first();
        $requestingCompanyID = $getRequestingCompanyID->id;

        //Masukkin ke DB Konfirmasi Order
        $newOrder = DB::connection('mysql2')->table('konfirmasi_orders')->insert([
            'id' => NULL,
            'id_perusahaan_ditagihkan' => $requestingCompanyID,
            'id_perusahaan_diverifikasi' => $requestingCompanyID,
            'id_jenis_jasa' => '1',
            'tanggal' => date('Y-m-d'),
            'nomor' => '-',
            'objek_order' => $product_qty,
            'berbayar' => '0',
            'total_biaya' => '0',
            'dibebankan_kepada' => '-',
            'status' => '0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //Ambil ID Konfirmasi Order yang di Generate
        $getnewOrderID = DB::connection('mysql2')->table('konfirmasi_orders')->select('id')->where('id_perusahaan_diverifikasi','=',$requestingCompanyID)->where('created_at','=',date('Y-m-d H:i:s'))->first();
        $newOrderID = $getnewOrderID->id;

        // insert to product request table
        $productRequest = new ProductRequest();
        $productRequest->product_qty = $product_qty;
        $productRequest->id_oc = $newOrderID;
        $productRequest->request_number = $now->format('Y') . '.' . $now->format('m')  . '.' . $user->company->id . mt_rand(10, 99);
        $productRequest->company_id = $user->company->id;
        $productRequest->user_id = $user->id;
        $productRequest->surat_permohonan_path = $request->file('surat_permohonan')->store('post-files');
        $productRequest->lampiran_permohonan_path = $request->file('lampiran_permohonan')->store('post-files'); 
        $productRequest->request_date = $now;

        $productRequest->save();


        // insert to products table
        for ($i = 0; $i < $request->product_qty; $i++) {
            $products = new Products();
            $products->name = $name[$i];
            $products->product_request_id = $productRequest->id;
            $products->product_specification = $product_specification[$i];
            $products->product_type = $product_types[$i];
            $products->save();

            $newProducts = DB::connection('mysql2')->table('konfirmasi_order_produks')->insert([
                'id' => NULL,
                'oc_id' => $newOrderID,
                'nama_produk' => $name[$i],
                'tipe_produk' => $product_types[$i],
                'spesifikasi_produk' => $product_specification[$i],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->route('requests.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function show(ProductRequest $request)
    {

        $companies = Company::all();
        $product_data = Products::with('productRequest')->where('product_request_id', $request->id)->get();
        $count_request = ProductRequest::count();

        return view('requests-detail', compact('request', 'companies', 'product_data', 'count_request'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductRequest $request)
    {
        $current_date_time = Carbon::now()->format('Y-m-d');
        $companies = Company::all();
        $product_data = Products::with('productRequest')->where('product_request_id', $request->id)->get();
        $companyById = Company::find($request->company_id);


        return view('requests-edit', compact('request', 'companies', 'product_data', 'companyById', 'current_date_time'));
    }

    public function lacakstatus(ProductRequest $request,$id)
    {
        $current_date_time = Carbon::now()->format('Y-m-d');
        $companies = Company::all();
        $product_request = ProductRequest::find($id);
        $product_data = Products::with('productRequest')->where('product_request_id', $id)->get();
        $getDataOC = DB::connection('mysql2')->table('konfirmasi_orders')->where('id',$product_request->id_oc)->get();
        $getDataPenugasan = DB::connection('mysql2')->table('penugasans')->where('oc_id','=',$product_request->id_oc)->get();
        // dd(isset($getDataPenugasan[0]));
        $idPenugasan = array();
        $tanggalPenugasan = array();
        foreach($getDataPenugasan as $countPenugasan){
            array_push($idPenugasan,$countPenugasan->id);
            array_push($tanggalPenugasan,$countPenugasan->tgl_akhir);
        }
        $getDataBarangPenugasan = DB::connection('mysql2')->table('verifikasi_produks')->whereIn('penugasan_id',$idPenugasan)->get();
        // dd($getDataBarangPenugasan);

        return view('requests-lacakstatus', compact('request', 'companies', 'product_data','current_date_time','product_request','id','getDataOC','getDataPenugasan','getDataBarangPenugasan','tanggalPenugasan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengajuan  $request
     * @param  \App\Models\ProductRequest  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengajuan $request, ProductRequest $productRequest, $id)
    {

        $user = auth()->user();

        if ($request->hasFile('attachment_path')) {
            foreach ($request->file('attachment_path') as $file) {
                $fileurl = $file->store('post-files');
                $data_attachment[] = $fileurl;
            }
        } else {
            $data_attachment = null;
        }

        if ($request->hasFile('sertificate_path')) {
            $data_sertificate = $request->file('sertificate_path')->store('post-files');
        } else {
            $data_sertificate = null;
        }

        // Insert to product request table
        if ($user->role == 'admin') {

            DB::table('product_requests')
                ->where('id', $id)
                ->update([
                    'product_qty' => count($request->name),
                    'attachment_path' => $data_attachment != null ? json_encode($data_attachment) : $request->existed_attachment_path,
                    'sertificate_path' => $data_sertificate != null ?  $request->file('sertificate_path')->store('post-files') : $request->existed_sertificate_path,
                    'user_id' => $user->id,
                    'request_status' => $request->request_status,
                    'note' => $request->note,
                    'type_of_order' => $request->type_of_order,
                    'approved_by' => $request->approved_by,
                    'updated_at' => Carbon::now()
                ]);
        } else {
            DB::table('product_requests')
                ->where('id', $id)
                ->update([
                    'product_qty' => count($request->name),
                    'attachment_path' => $data_attachment != null ? json_encode($data_attachment) : $request->existed_attachment_path,
                    'company_id' => $user->company->id,
                    'user_id' => $user->id,
                    'updated_at' => Carbon::now()
                ]);
        }



        // Delete product by id
        DB::table('products')->where('product_request_id', '=', $id)->delete();

        //insert konfimasi order Produk
        $nama_produk = $request->name;
        $tipe_produk = $request->product_type;
        $spesifikasi_produk = $request->product_specification;
        foreach ($nama_produk as $idx => $data) {
            $pd = new Products;
            $pd->product_request_id = $id;
            $pd->name = $nama_produk[$idx];
            $pd->product_type = $tipe_produk[$idx];
            $pd->product_specification = $spesifikasi_produk[$idx];
            $pd->save();
        }

        return redirect()->route('requests.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UpdatePengajuan  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductRequest $productRequest)
    {
        $productRequest->delete();

        return redirect()->route('requests.index');
    }
}
