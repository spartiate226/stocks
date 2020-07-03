<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use App\Stock;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function index(){
        $produit=Produit::paginate(3);
        $cat=Categorie::all();
        return view('pages.produit',['produits'=>$produit,'categories'=>$cat]);
    }
    function store(Request $request){
        $produit=Produit::create([
            'categorie_id'=>$request->categorie_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix
        ]);
        Stock::create([
            'produit_id'=>$produit->id,
            'quantite'=>$request->quantite
        ]);
        return redirect('produit');
    }
    function show($produit_id){
        $produit=Produit::find($produit_id);
        return view('pages.detail',['produit'=>$produit]);
    }
}
