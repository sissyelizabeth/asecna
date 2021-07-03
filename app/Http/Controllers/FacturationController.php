<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturationController extends Controller
{ /**
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
       return view('facturation.list');
   }
   public function form()
   {
    return view('facturation.form');

   }
        
    
}
