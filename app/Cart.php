<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	public function detalles()
	{
		// CarDetalles tiene muchos producto 
		return $this->hasMany(CartDatail::class);

	}
}
