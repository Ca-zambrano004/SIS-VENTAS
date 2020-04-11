<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Producto;
use App\ProductoImagen;

class TestController extends Controller
{
   public function welcome(){

   	 $Productos = Producto::paginate(9);
   	return view ("welcome")->with(compact('Productos'));
   
   }
}
