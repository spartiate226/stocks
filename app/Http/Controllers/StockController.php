<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    function index(){
        return view('pages.stock');
    }
    function store(Request $request){
        
        return redirect('');
    }
}
