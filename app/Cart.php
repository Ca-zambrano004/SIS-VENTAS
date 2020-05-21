<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
	public function detalles()
	{
		// Cart tiene muchos CarDetalles
		return $this->hasMany(CartDatail::class);
	}
	public function getTotalAttribute()
	{
		$total = 0;
		foreach ($this->detalles as $detalle) {
			$total += $detalle->cantidad * $detalle->producto->precio;
		}
		return $total;
	}
}
