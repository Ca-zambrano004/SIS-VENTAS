<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrdenPedido;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Cart;

class CartController extends Controller
{
  public function email(User $user, Cart $cart)
  {
    $datosUser->user() = array(
      'name'      => ('nombre'),
      'telefono'  => ('telefono'),
      'email'     => ('email'),
      'dirrecion' => ('direccion')
    );
    $datosCart->cart() = array(
      'name'      => ('nombre'),
      'telefono'  => ('telefono'),
      'email'     => ('email'),
      'dirrecion' => ('direccion')
    );

    Mail::to('Aeroshop@gmail.com')->send(new OrdenPedido($datosUser, $datosCart));

    $cart = auth()->user()->cart;
    $cart->estado = 'Pendiente';
    $cart->save();
    $notificacion = 'El pedido se ha enviado de manera satisfactoria.';
    return back()->with(compact('notificacion'));
  }


  public function update()
  {
    $cart = auth()->user()->cart;
    $cart->estado = 'Pendiente';
    $cart->save();
    return back();
  }
}
