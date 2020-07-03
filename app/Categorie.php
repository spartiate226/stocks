<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded=[];
    function Produits(){
        return $this->hasMany(Produit::class);
    }
}
