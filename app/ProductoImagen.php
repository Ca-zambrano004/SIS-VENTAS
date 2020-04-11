<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    //$ProductoImagen->producto
    public function producto()
    {	
    	// una imagen tiene un producto
    	return $this->belongsTo(Producto::class);
    }

     public function getUrlAttribute()
    {	
    	if (substr($this->image, 0, 4) === "http") {
    		return $this->image;
    	}
    	return '/imagenes/productos/' . $this->image;
    }
}
