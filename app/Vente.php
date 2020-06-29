<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    function Produit(){
        $this->belongsTo(Produit::class);
    }
}
