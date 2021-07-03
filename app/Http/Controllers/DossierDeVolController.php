<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DossierDeVolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        return view('dossierdevol.list');
    }
    
}
