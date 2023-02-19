<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Company;
use App\Models\Profile;
use App\Models\User;
use App\Rules\MatchOldPassword;
use DB;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles = Company::with('user')->where('user_id', auth()->user()->id)->get();

        return view('profile', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        session()->flash('success', 'Password changed successfully');

        // dd('Password changed successfully');
        return redirect()->route('home')->with('success', 'Password changed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

        // dd($profile);
        //
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, $id)
    {

        $user = auth()->user();

        // File validation
        if ($request->file('npwp_file_path')) {
            $request->file('npwp_file_path')->store('post-files');
        } elseif ($request->file('iui_file_path')) {
            $request->file('iui_file_path')->store('post-files');
        } elseif ($request->file('others_file_path')) {
            $request->file('others_file_path')->store('post-files');
        } else {
            null;
        }

        // Update data company to companies table
        DB::table('companies')->where('id', $id)->update([
            'name' => $request->name,
            'npwp' => $request->npwp,
            // 'email' => $request->email,
            'person_in_charge' => $request->person_in_charge,
            'phone_in_charge' => $request->phone_in_charge,
            'business_capital' => $request->business_capital,
            'npwp_file_path' => $request->npwp_file_path != null ? $request->file('npwp_file_path')->store('post-files') : $request->existed_npwp_file_path,
            'iui_file_path' =>  $request->iui_file_path != null ? $request->file('iui_file_path')->store('post-files') : $request->existed_iui_file_path,
            'others_file_path' => $request->others_file_path != null ? $request->file('others_file_path')->store('post-files') : $request->existed_others_file_path,
            'updated_at' => now(),
        ]);

        // Update data user to table users
        DB::table('users')->where('id', $user->id)->update([
            'name' => $request->name,
            'updated_at' => now(),
        ]);


        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
