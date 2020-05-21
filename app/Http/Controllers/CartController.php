<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrdenPedido;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Cart;

class CartController extends Controller
{
  public function email(Request $request)
  {
    //$user = $request['idUser'];
    $usuarioBuscado = $request['idUser'];
    $user = User::find($usuarioBuscado);

    $cartDecode = $request['CartDetalle'];
    $cart2 = json_decode($cartDecode, true);

    //dd($user, $cart2);

    $cart = new Cart();
    $cart->id = $request['CartDetalle'];
    $cart->cantidad = $request['CartDetalle'];
    $cart->descuento = $request['CartDetalle'];
    $cart->cart_id = $request['CartDetalle'];
    $cart->producto_id = $request['CartDetalle'];

    // dd($user, $cart, $cart2);


    /* $cart = new Cart([
      'id' => $request['CartDetalle'],
      'cantidad' => $request['CartDetalle'],

      'descuento' => $request->input('card-name'),
      'cart_id' => $request->input('card-number'),
      'producto_id' => $request->input('card-expiry-month'),
      'created_at' => $request->input('card-expiry-year'),
      'updated_at' => $request->input('card-cvc'),
    ]);
*/



    //$pedido->save();




    Mail::to($user->email)->send(new OrdenPedido($user, $cart));

    $cart = auth()->user()->cart;
    $cart->estado = 'Pendiente';
    $cart->save();
    $notificacion = 'El pedido se ha enviado de manera satisfactoria.
    Nos pondremos en contacto con usted lo mas breve posible.';
    return back()->with(compact('notificacion'));
  }
}
