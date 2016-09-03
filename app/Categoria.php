<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $table ="categoria";



   protected $fillable = [
        'nombre','descripcion'
    ];
  
    public function categoria()
    {
        return $this->belongsTo('App\Evento');
    }

}