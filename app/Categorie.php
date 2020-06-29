<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    function Produits(){
        $this->hasMany(Produit::class);
    }
}
