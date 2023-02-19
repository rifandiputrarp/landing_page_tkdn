<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
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

        $search = $request['keyword'] ?? '';

        if ($search != '') {
            $companies = Company::with('user')
                ->where('name', 'Like', '%' . request('keyword') . '%')
                ->orWhere('status', 'Like', '%' . request('keyword') . '%')
                ->sortable()
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $companies = Company::with('user')
                ->sortable()
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }

        return view('admin.company-list', compact('companies', 'search'));
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $otherCompanies = Company::limit(5)->where('id', '!=', $company->id);
        return view('admin.company-detail', compact('company', 'otherCompanies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $current_date_time = Carbon::now()->format('Y-m-d');
        return view('admin.company-edit', compact('company', 'current_date_time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {

        $company->fill($request->safe()->only(['name', 'email', 'business_capital', 'npwp', 'person_in_charge', 'phone_in_charge', 'status', 'note', 'approved_by'])); // fill only the fields that are allowed to be updated
        $company->user->fill($request->safe()->only(['name', 'email']));
        $company->push();

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->back()->with('success', 'Company has been deleted');
    }
}
