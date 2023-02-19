<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use DB;

class RegisteredCompanyController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('auth.register-company');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'corporate_body' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'unique:users', Rules\Password::defaults()],
            'business_capital' => ['required', 'string', 'max:255'],
            'npwp' => ['required', 'string', 'unique:companies'],
            'person_in_charge' => ['required', 'string', 'max:255'],
            'phone_in_charge' => ['required', 'string', 'max:255'],
            'npwp_file_path' => 'required|file|file|max:2048',
            'iui_file_path' => 'required|file|file|max:2048',
            'others_file_path' => 'file|file|max:2048',
        ]);


        if ($request->file('npwp_file_path')) {
            $request->file('npwp_file_path')->store('post-files');
        } elseif ($request->file('iui_file_path')) {
            $request->file('iui_file_path')->store('post-files');
        } elseif ($request->file('others_file_path')) {
            $request->file('others_file_path')->store('post-files');
        }



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'company'
        ]);


        $user->company()->create([
            'corporate_body' => $request->corporate_body,
            'name' => $request->name,
            'email' => $request->email,
            'business_capital' => $request->business_capital,
            'npwp' => str_replace(' ', '', $request->npwp),
            'person_in_charge' => $request->person_in_charge,
            'phone_in_charge' => $request->phone_in_charge,
            'npwp_file_path' => $request->file('npwp_file_path')->store('post-files'),
            'iui_file_path' => $request->file('iui_file_path')->store('post-files'),
            'others_file_path' => $request->file('others_file_path') ? $request->file('others_file_path')->store('post-files') : $request->others_file_path,
        ]);

        $newPerusahaan = DB::connection('mysql2')->table('master_perusahaans')->insert([
            'id' => NULL,
            'badan' => $request->corporate_body,
            'nama' => $request->name,
            'email_pusat' => $request->email,
            'npwp' => str_replace(' ', '', $request->npwp),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
