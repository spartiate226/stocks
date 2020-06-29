<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function index(){
        return view('pages.produit');
    }
    function store(Request $request){
        
        return redirect('');
    }
    function show($produit_id){
        
        return view('pages.detail');
    }
}
