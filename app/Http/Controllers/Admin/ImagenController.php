<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Producto;
use App\ProductoImagen;
use file;



class ImagenController extends Controller
{
	public function index($id)
		{
	    $producto=Producto::find($id);
	    $imagen = $producto->imagenes()->orderBy('destacada', 'desc')->get();
	   	return view('admin.productos.imagenes.index')->with(compact('producto','imagen')); 
	   	//listado
		}

	public function store(Request $request, $id)
		{
			//GUARDAR LA IMAGEN DE NUESTRO PRODUCTO
			$file = $request->file('foto');
			$path = public_path() . '/imagenes/productos';
			$fileName = uniqid() . $file->getClientOriginalName();
			$moved = $file->move($path , $fileName);


			//CREAR UN REGISTRO EN LA TABLA DE PRODUCTO_IMAGEN BD
			if ($moved) {
				$ProductoImagen = new ProductoImagen();
			    $ProductoImagen->image = $fileName;
	            //$ProductoImagen->destacada = false;
	            $ProductoImagen->producto_id = $id;
	            $ProductoImagen->save();
			}
			

            return back();
		}

	public function destroy(request $request, $id)
	{
		//ELIMINAR LA IMAGEN DE NUESTRO PRODUCTO
		$ProductoImagen = ProductoImagen::find($request ->input('image_id'));

		if (substr($ProductoImagen->image, 0, 4) === "http") {
    		    $deleted = true;	
    	}else{
    		$fullPath = public_path() . '/imagenes/productos/'. $ProductoImagen->image;
    		
    		$deleted = unlinK($fullPath);
    		
    		}

		//ELIMINAR UN REGISTRO EN LA TABLA DE PRODUCTO_IMAGEN BD
		if ($deleted) {
			$ProductoImagen->delete();
		}

	return back();
	}

	public function select ($id , $imagen)
	{
		ProductoImagen::where('producto_id', $id)->update([
			'destacada' => false
		]);


		$ProductoImagen = ProductoImagen::find($imagen);
		$ProductoImagen->destacada = true; 
		$ProductoImagen -> save(); 

		return back();

	}


}
