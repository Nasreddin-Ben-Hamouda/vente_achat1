<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function fiche()
    {
        return $this->hasOne('App\Fiche');
    }
    public function commande()
    {
        return $this->hasMany('App\Commande');
    }
}
