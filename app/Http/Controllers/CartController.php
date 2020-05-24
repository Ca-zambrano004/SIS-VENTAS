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
    $usuarioBuscado = $request['idUser'];
    $user = User::find($usuarioBuscado);

    $cartDecode = $request['CartDetalle'];
    $cart = json_decode($cartDecode, true);

    Mail::to($user->email)->send(new OrdenPedido($user, $cart));

    $cart = auth()->user()->cart;
    $cart->fecha_orden = Carbon::now()->format('Y-m-d H:i:s');
    $cart->fecha_llegada = Carbon::now()->addWeek(2)->format('Y-m-d');
    $cart->estado = 'Pendiente';
    $cart->save();

    $notificacion = 'El pedido se ha enviado de manera satisfactoria.
    Nos pondremos en contacto con usted lo mas breve posible.';

    return back()->with(compact('notificacion'));
  }
}
