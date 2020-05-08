<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Category;



class TestController extends Controller
{
   public function welcome(){

   	 $categoria = Category::has('productos')->get();
   	return view ("welcome")->with(compact('categoria'));
   
   }
}
 