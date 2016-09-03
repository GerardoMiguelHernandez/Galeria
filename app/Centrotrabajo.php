<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centrotrabajo extends Model
{
    //

    protected $table ="centro_trabajo";



   protected $fillable = [
        'nombre'
    ];
  
      public function tipousuario(){
      return $this->hasOne('App\Evento');
       
} 
}
