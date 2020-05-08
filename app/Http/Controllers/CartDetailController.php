<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDatail;

class CartDetailController extends Controller
{
    public function store(Request $request)
  {
  	$cartDetail = new CartDatail();
      $cartDetail->cart_id = auth()->user()->cart->id ;
		  $cartDetail->producto_id = $request->producto_id;
      $cartDetail->cantidad = $request->cantidad;
      $cartDetail->save();
      $notificacion = 'El producto se ha agregado del carrito de compras de manera satisfactoria.';
    return back()->with(compact('notificacion'));
  }

  
 
  public function destroy(Request $request)
  {
  	$cartDetail =  CartDatail::find($request->cart_detalle_id);
  		if ($cartDetail->cart_id == auth()->user()->cart->id) 
	  		$cartDetail->delete();
	  	$notificacion = 'El producto se ha eliminado del carrito de compras de manera satisfactoria.';
		return back()->with(compact('notificacion'));
  }

}
