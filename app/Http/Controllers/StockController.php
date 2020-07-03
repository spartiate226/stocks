<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    function index(){
        $stock=Stock::paginate(3);
        return view('pages.stock',['stocks'=>$stock]);
    }
    function store(Request $request){
        $stock=Stock::find($request->id);
        $stock->quantite=$stock->quantite+$request->quantite;
        $stock->save();
        return redirect('stock');
    }
}
