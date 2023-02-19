<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalBasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:company']);
    }

    public function index()
    {
        return view('company.legal-basis');
    }
}
