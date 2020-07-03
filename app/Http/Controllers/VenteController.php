<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Stock;
use App\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    function index(){
        $vente=Vente::paginate(10);
        return view('pages.vente',['ventes'=>$vente]);
    }
    function store(Request $request){
        $vente=Vente::create([
            'produit_id'=>$request->produit_id,
            'quantite'=>$request->quantite,
            'somme'=>Produit::find($request->produit_id)->prix*$request->quantite
        ]);
        $stock=$vente->Produit->Stock;
        $stock->quantite=$stock->quantite-$request->quantite;
        $stock->save();
        return redirect('vente');
    }
}
