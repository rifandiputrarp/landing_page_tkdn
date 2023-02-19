<?php

namespace App\Http\Controllers;

use App\Models\Company;
// use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'admin':

                $alumniCount = User::where('role', 'student')->whereNotNull('email_verified_at')->count();
                $companyCount = Company::count();


                $last7days = Carbon::now()->subDays(7);
                $newCompanies = Company::with('user')->where('created_at', '>=', $last7days)->where('status', 'new')->orderBy('created_at', 'desc')->limit(10)->get();

                return view('admin.home', compact('alumniCount', 'companyCount', 'newCompanies'));
                break;

            case 'company':
                $user = auth()->user();

                return view('company.home', compact('user'));
                break;

            default:
                # code...
                break;
        }
    }
}
