<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrdenPedido;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Cart;

class CartController extends Controller
{
  public function email(Request $request, User $user)
  {
    /*  $datosUser = array(
      'name'      => ('nombre'),
      'telefono'  => ('telefono'),
      'email'     => ('email'),
      'dirrecion' => ('direccion')
    ); 
    $datosUser = [
      'name' => $user->name,
      'telefono'  => $user->telefono,
      'email'     => $user->email,
      'direccion' => $user->direccion
    ];

    $datosCart = [
      'cantidad' => '2'
    ]; $r = $request->all();
    dd($r);
    */
    $usuarioBuscado = $request['idUser'];

    $user = User::find($usuarioBuscado);

    // $email = $valores['email'];

    //dd($user->email);

    Mail::to($user->email)->send(new OrdenPedido($user));


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
