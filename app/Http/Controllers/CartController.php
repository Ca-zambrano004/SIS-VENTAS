<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
    	$cart =auth()->user()->cart;
    	$cart->estado='Pendiente';
    	$cart->save();
		
		$notificacion = 'Su pedido fue registrado de manera satisfactoria. Te contactaremos via Email';
    return back()->with(compact('notificacion'));
    }
}
