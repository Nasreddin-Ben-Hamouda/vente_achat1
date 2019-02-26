<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function produit()
    {
        return $this->belongsTo('App\Produit','produit_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
