<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use file;

class CategoryController extends Controller
{
    public function index()
   {
  
     	$categoria=Category::orderBy('id')->paginate(10);
   	return view('admin.categorias.index')->with(compact('categoria')); 
   	//listado
   }

   public function create()
   {
    $categoria=Category::all();
   	return view('admin.categorias.create')->with(compact('categoria')); 
   	//ver el furmulario de registro de los productos
      
   }

   public function store(Request $request)
   {
      	$this->validate($request, Category::$reglas, Category::$mensaje);

		$category = Category::create($request->only('nombre', 'descripcion')); 

      if ($request->hasfile('imagen')) {
          //GUARDAR LA IMAGEN DE NUESTRA CATEGORIA
         $file = $request->file('imagen');
          $path = public_path() . '/imagenes/categorias';
          $fileName = uniqid() . $file->getClientOriginalName();
          $moved = $file->move($path , $fileName);

          //CREAR UN REGISTRO EN LA TABLA DE PRODUCTO_IMAGEN BD
          if ($moved) {
              $category->imagen = $fileName;
              $category->save();
          }
      }

    
    return redirect('/admin/categorias');

   }

   public function edit( Category $categoria)
   {
      return view('admin.categorias.edit')->with(compact('categoria')); 
      //ver el furmulario de edicion de las categorias
      
   }

   public function update(Request $request, Category $categoria)
   {

   	    //validaciones
      $this->validate($request, Category::$reglas, Category::$mensaje);

      //REGISTRAR CAMBIOS DE LA CATEGORIA EN LA BD
      $categoria->update($request->only('nombre', 'descripcion'));

      if ($request->hasfile('imagen')) {
          //GUARDAR LA IMAGEN DE NUESTRA CATEGORIA
          $file = $request->file('imagen');
          $path = public_path() . '/imagenes/categorias';
          $fileName = uniqid() . $file->getClientOriginalName();
          $moved = $file->move($path , $fileName);

          //CREAR UN REGISTRO EN LA TABLA DE PRODUCTO_IMAGEN BD
          if ($moved) {

              $previousPath =$path. '/' . $categoria->imagen;

              $categoria->imagen = $fileName;
              $saved = $categoria->save();

          if ($saved)
              unlinK($previousPath);
          }
      }

    return redirect('/admin/categorias');

   }

   public function destroy(Category $categoria)
   {
      //ELIMINAR LA CATEGORIA EN LA BD
         $categoria-> delete();
          //Eliminar
     
         return back();

   }
}
