<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //


    protected $table ="evento";



   protected $fillable = [
        'nombre','fecha','lugar','id_categoria','id_centro'
    ];
  
       public function categoria()
    {
        return $this->hasMany('App\Categoria');
    }

    public function centrotrabajo()
    {
        return $this->hasMany('App\Centrotrabajo');
    }

}
