<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Producto;
use App\Category;

class ProductoController extends Controller
{
   public function index()
   {
  
     $producto=Producto::paginate(10);
   	return view('admin.productos.index')->with(compact('producto')); 
   	//listado
   }

   public function create()
   {
      $category=Category::all();
   	return view('admin.productos.create')->with(compact('category')); 
   	//ver el furmulario de registro de los productos
      
   }

   public function store(Request $request)
   {
       //REGISTRAR PRODUCTO EN LA BD
         $producto = new Producto();
         $producto->nombre = $request ->input('nombre');
         $producto->descripcion = $request ->input('descripcion');
         $producto->precio = $request ->input('precio');
         $producto->long_descripcion = $request ->input('long_descripcion');
         $producto->category_id = $request ->input('categoria');
         $producto->save();

         return redirect('/admin/productos');

   }

      public function edit($id)
   {
      $category=Category::all();
      $producto=Producto::find($id);
      return view('admin.productos.edit')->with(compact('producto','category')); 
      //ver el furmulario de edicion de los productos
      
   }

   public function update(Request $request, $id)
   {
      //REGISTRAR CAMBIOS DE PRODUCTO EN LA BD
    // dd($request->all());
         $producto=Producto::find($id);
         $producto->nombre = $request ->input('nombre');
         $producto->descripcion = $request ->input('descripcion');
         $producto->precio = $request ->input('precio');
         $producto->long_descripcion = $request ->input('long_descripcion');
         $producto->category_id = $request ->input('categoria');
         $producto->save(); //Actualizar
         return redirect('/admin/productos');

   }

   public function destroy($id)
   {
      //ELIMINAR PRODUCTO EN LA BD
         $producto=Producto::find($id);
         $producto-> delete();
          //Eliminar
     
         return back();

   }
}
