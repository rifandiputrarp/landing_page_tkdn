<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class DataMasterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count_company = Company::count();
        $search = $request['keyword'] ?? '';

        if ($search != '') {
            $companies = Company::with('user')->where('name', 'Like', '%' . request('keyword') . '%')->orWhere('status', 'Like', '%' . request('keyword') . '%')->sortable()->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $companies = Company::with('user')->sortable()->orderBy('created_at', 'desc')->paginate(10);
        }


        return view('admin.data-master-list', compact('companies', 'search', 'count_company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $alumnus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $alumnus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, User $alumnus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $alumnus)
    {
        $alumnus->delete();

        return redirect()->route('alumni.index');
    }
}
