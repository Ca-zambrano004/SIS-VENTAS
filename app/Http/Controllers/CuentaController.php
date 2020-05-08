<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class CuentaController extends Controller
{
   public function index(){

	$user=user::all();
   	return view ("cuenta")->with(compact('user'));
   
   }
   public function store(){


   	
   }
   
}
