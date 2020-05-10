<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
   public function index()
   {
      return view("contacto");
   }
   public function send(Request $request)
   {
      $this->validate($request, [
         'nombre'     =>  'required',
         'telefono'     =>  'required|numeric|min:5',
         'email'  =>  'required|email',
         'mensaje' =>  'required',
         'asunto' =>  'required'
      ]);

      $data = array(
         'nombre'      =>  $request->input('nombre'),
         'telefono'      =>  $request->input('telefono'),
         'email'      =>  $request->input('email'),
         'asunto'      =>  $request->input('asunto'),
         'mensaje'   =>   $request->input('mensaje')
      );

      $email = $request->input('email');

      Mail::to($email)->send(new SendMail($data));

      return view('emails.success');
   }
}
