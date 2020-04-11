<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	//$producto->category
    public function category()
    {		
        //un producto tiene una categoria
    	return $this->belongsTo(Category::class);
    }

 
    //$producto->Imagenes
    public function imagenes()
    {	// Un producto tiene muchas imagenes
    	return $this->hasMany(ProductoImagen::class);
    }


      public function getDestacadaImageUrlAttribute()
    {   // URL de la Imagen del producto 
        $destacadaImage = $this -> imagenes()->where('destacada', true)->first();
        if (!$destacadaImage){
            $destacadaImage= $this->imagenes()->first();
        }
        if ($destacadaImage) {
            return $destacadaImage->url;
        }

        // MOSTRAR UNA IMAGEN POR DEFECTO

        return '/imagenes/productos/default.jpg';
    }

}
