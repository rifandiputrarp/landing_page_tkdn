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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nim' => ['required', 'string', 'max:255', 'regex:/^(\d{2}.\d{2}.\d{4}|\d{2}\w{2}\d{4})$/i'],
            'prodi' => ['required', 'string', 'max:255'],
            'faculty' => ['required', 'string', 'max:255'],
            'class_year' => ['required', 'digits:4'],
            'graduate_year' => ['required', 'digits:4'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student'
        ]);

        $user->studentInfo()->create([
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'faculty' => $request->faculty,
            'class_year' => $request->class_year,
            'graduate_year' => $request->graduate_year,
            'phone' => $request->phone
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
