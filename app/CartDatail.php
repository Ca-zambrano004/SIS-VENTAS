<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDatail extends Model
{
    	//$CartDatail->producto
    public function producto()
    {		
        //Un producto pertenece un CartDatail
    	return $this->belongsTo(Producto::class);
    }
}
