<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['departamentos_id', 'nombre'];

    //municipio->usuario
    public function usuario()
    {
        //un producto pertenece a una categoria
        return $this->belongsTo(User::class);
    }
}
