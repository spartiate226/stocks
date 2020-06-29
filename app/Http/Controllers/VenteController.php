<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenteController extends Controller
{
    function index(){
        return view('pages.vente');
    }
    function store(Request $request){
        
        return redirect('');
    }
}
