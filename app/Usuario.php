<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

 protected $table ="usuario";



   protected $fillable = [
        'nombre','apellido_paterno','apellido_materno','id_tipo'
    ];
  
      public function tipousuario(){
      return $this->hasOne('App\Tipousuario');
       
} 

}
