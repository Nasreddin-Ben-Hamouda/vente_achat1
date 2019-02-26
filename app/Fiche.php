<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
   
 public function produit(){
 	return $this->belongsTo('App\Produit');
 }
}
