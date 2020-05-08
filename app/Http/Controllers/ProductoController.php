<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\ProductoImagen;

class ProductoController extends Controller
{
  public function show($id)
  {

      $Producto=Producto::find($id);
       $imagen=$Producto->imagenes;
      return view('productos.show')->with(compact('Producto','imagen')); 
      //ver el furmulario de edicion de los productos
  }  

  public function index()
   {
  
     $producto=Producto::paginate(10);
   	return view('productos.index')->with(compact('producto')); 
   	//listado
   }

}
