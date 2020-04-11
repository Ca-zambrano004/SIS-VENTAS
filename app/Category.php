<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function productos()
    {		
    	//una categoria tiene varios productos
    	return $this->hasMany(Producto::class);
    }
}
