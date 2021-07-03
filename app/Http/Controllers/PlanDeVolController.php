<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanDeVolController extends Controller
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
        return view('plandevol.list');
    }
    public function form()
    {
        return view('plandevol.form');
    }
    public function add(Request $request)
    {
        dd($request->all());
    }


}
   
