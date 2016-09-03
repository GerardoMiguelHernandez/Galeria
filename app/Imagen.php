<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //


     protected $table ="imagen";



   protected $fillable = [
        'imagen','id_usuario','id_evento'
    ];
  
       public function usuario()
    {
        return $this->hasMany('App\Usuario');
    }

    public function evento()
    {
        return $this->hasMany('App\Evento');
    }
}
