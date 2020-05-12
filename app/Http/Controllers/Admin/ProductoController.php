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

      $producto = Producto::paginate(10);
      return view('admin.productos.index')->with(compact('producto'));
      //listado
   }

   public function create()
   {
      $category = Category::orderBy('nombre')->get();
      return view('admin.productos.create')->with(compact('category'));
      //ver el furmulario de registro de los productos

   }

   public function store(Request $request)
   {
      //validaciones
      $mensaje = [
         'nombre.required' => 'Es obligatorio ingresar un nombre al producto.',
         'nombre.min' => 'El nombre del producto debe contener minimo 4 caracteres.',
         'descripcion.required' => 'Es obligatorio ingresar la descripcion corta del producto.',
         'descripcion.max' => 'La descripcion corta del producto debe contener miximo 250 caracteres.',
         'precio.min' => 'Es obligatorio ingresar un precio al producto.',
         'nombre.unique' => 'El nombre del producto ya se encuetra registrado, verifique e intente nuevamente.',
         'precio.numeric' => 'Ingresar un precio valido al producto.',
         'precio.min' => 'No se admiten valores ceros o negativos al precio del producto.'
      ];
      $reglas = [
         'nombre' => 'required|min:4|unique:productos',
         'descripcion' => 'required|max:250',
         'precio' => 'required|numeric|min:1'
      ];

      $this->validate($request, $reglas, $mensaje);


      //REGISTRAR PRODUCTO EN LA BD
      $producto = new Producto();
      $producto->nombre = $request->input('nombre');
      $producto->descripcion = $request->input('descripcion');
      $producto->precio = $request->input('precio');
      $producto->long_descripcion = $request->input('long_descripcion');
      $producto->category_id = $request->category_id;
      $producto->save();

      return redirect('/admin/productos');
   }

   public function edit($id)
   {
      $category = Category::orderBy('nombre')->get();
      $producto = Producto::find($id);
      return view('admin.productos.edit')->with(compact('producto', 'category'));
      //ver el furmulario de edicion de los productos

   }

   public function update(Request $request, $id)
   {
      //REGISTRAR CAMBIOS DE PRODUCTO EN LA BD
      // dd($request->all());
      //validaciones
      $mensaje = [
         'nombre.required' => 'Es obligatorio ingresar un nombre al producto.',
         'nombre.min' => 'El nombre del producto debe contener minimo 4 caracteres.',
         'descripcion.required' => 'Es obligatorio ingresar la descripcion corta del producto.',
         'descripcion.max' => 'La descripcion corta del producto debe contener miximo 250 caracteres.',
         'precio.min' => 'Es obligatorio ingresar un precio al producto.',
         'nombre.unique' => 'El nombre del producto ya se encuentra registrado, verifique e intente nuevamente.',
         'precio.numeric' => 'Ingresar un precio valido al producto.',
         'precio.min' => 'No se admiten valores ceros o negativos al precio del producto.'
      ];
      $reglas = [
         'nombre' => 'required|min:4|unique:productos',
         'descripcion' => 'required|max:250',
         'precio' => 'required|numeric|min:1'
      ];

      $this->validate($request, $reglas, $mensaje);

      $producto = Producto::find($id);
      $producto->nombre = $request->input('nombre');
      $producto->descripcion = $request->input('descripcion');
      $producto->precio = $request->input('precio');
      $producto->long_descripcion = $request->input('long_descripcion');
      $producto->category_id = $request->category_id;
      $producto->save(); //Actualizar
      return redirect('/admin/productos');
   }

   public function destroy($id)
   {
      //ELIMINAR PRODUCTO EN LA BD
      $producto = Producto::find($id);
      $producto->delete();
      //Eliminar

      return back();
   }
}
