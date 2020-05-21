<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrdenPedido;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
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
    $cart = json_decode($cartDecode, true);

    //dd($user, $cart2);

    // $cart = new Cart();
    // $cart->id = $request['CartDetalle'];

    // dd($user, $cart);

    Mail::to($user->email)->send(new OrdenPedido($user, $cart));

    $cart = auth()->user()->cart;
    $cart->fecha_orden = Carbon::now()->format('Y-m-d H:i:s');
    $cart->estado = 'Pendiente';
    $cart->save();

    $notificacion = 'El pedido se ha enviado de manera satisfactoria.
    Nos pondremos en contacto con usted lo mas breve posible.';


    return back()->with(compact('notificacion'));
  }
}
