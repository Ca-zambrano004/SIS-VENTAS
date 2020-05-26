<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

use App\user;
use Illuminate\Foundation\Auth\User as AuthUser;

class CuentaController extends Controller
{
   public function index()
   {

      $municipio = Municipio::orderBy('id')->get();
      return view("cuenta.index")->with(compact('municipio'));
   }

   public function edit()
   {
      $municipio = Municipio::orderBy('id')->get();
      return view("cuenta.edit")->with(compact('municipio'));
   }

   public function update(Request $request)
   {
      //validaciones
      $mensaje = [
         'name.required' => 'Es obligatorio ingresar un nombre al producto.',
         'name.min' => 'El nombre del producto debe contener minimo 4 caracteres.',
         'apellidos.required' => 'Es obligatorio ingresar la descripcion corta del producto.',
         'telefono.min' => 'Es obligatorio ingresar un precio al producto.',
         'email.unique' => 'El nombre del producto ya se encuetra registrado, verifique e intente nuevamente.',
         'direccion.required' => 'Ingresar un precio valido al producto.',
      ];
      $reglas = [
         'nombre' => 'required|min:4|unique:productos',
         'apellidos' => 'required|max:250',
         'telefono' => 'required|numeric|min:1'
      ];

      $id = auth()->id();
      $this->validate($request, $reglas, $mensaje);
      $user = User::find(Auth::User()->id);
      dd($user);
      $user->name = $request->input('nombre');
      $user->email = $request->input('email');
      $user->telefono = $request->input('telefono');
      $user->direccion = $request->input('direccion');
      $user->municipio_id = $request->municipio_id;
      $user->apellidos = $request->input('apellidos');
      $user->save(); //Actualizar
      return redirect('/home');
   }
}
