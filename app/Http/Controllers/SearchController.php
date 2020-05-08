<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class SearchController extends Controller
{
   	public function show(Request $request)
   	{
   			$busqueda = $request->input('busqueda');

   			$Productos = Producto::where('nombre', 'like', "%$busqueda%")->paginate(6);
   		return view('busquedas.show')->with(compact('Productos', 'busqueda'));
   	}

   	public function data(){

		$productos =  Producto::pluck('nombre');
		return $productos;   		
   	}
}
