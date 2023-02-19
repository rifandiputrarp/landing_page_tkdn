<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class VerifyCompanyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Company $company)
    {
        $company->fill([
            'approved_at' => now(),
            'approved_by' => auth()->user()->id
        ]);
        $company->push();

        return redirect()->route('companies.index');
    }
}
