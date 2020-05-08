<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
  public function show (Category $categoria)
  {
  	$Productos = $categoria->productos()->paginate(12);
  	return view('categorias.show')->with(compact('categoria', 'Productos'));

  }
}
		