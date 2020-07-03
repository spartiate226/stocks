<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $guarded=[];
    function Produit(){
        return $this->belongsTo(Produit::class);
    }
}
