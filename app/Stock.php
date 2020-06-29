<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    function Produit(){
        $this->belongsTo(Produit::class);
    }
}
