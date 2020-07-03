<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded=[];
    function Categorie(){
        return $this->belongsTo(Categorie::class);
    }
    function Stock(){
        return $this->hasOne(Stock::class);
    }

    function Ventes(){
        return $this->hasMany(Vente::class);
    }
}
