<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrdenPedido;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
  public function update()
  {
    $cart = auth()->user()->cart;
    $cart->estado = 'Pendiente';
    $cart->save();

    $notificacion = 'Su pedido fue registrado de manera satisfactoria. Te contactaremos via Email';
    return back()->with(compact('notificacion'));
  }

  public function email(Request $request)
  {
    $this->validate($request, [
      'nombre'     =>  'required',
      'telefono'     =>  'required|numeric|min:5',
      'email'  =>  'required|email',
      'mensaje' =>  'required',
      'asunto' =>  'required'
    ]);

    $data = array(
      'nombre'      =>  $request->input('nombre'),
      'telefono'      =>  $request->input('telefono'),
      'email'      =>  $request->input('email'),
      'asunto'      =>  $request->input('asunto'),
      'mensaje'   =>   $request->input('mensaje')
    );

    $email = $request->input('email');

    Mail::to($nombre, $email)->send(new OrdenPedido($data));

    return back();
  }
}
