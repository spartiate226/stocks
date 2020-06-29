<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    function Categorie(){
        $this->belongsTo(Categorie::class);
    }
    function Stock(){
        $this->hasOne(Stock::class);
    }

    function Ventes(){
        $this->hasMany(Vente::class);
    }
}
