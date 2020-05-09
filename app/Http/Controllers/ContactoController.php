<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;

class ContactoController extends Controller
{
   public function index()
   {

      return view("contacto");
   }
   public function send(Request $request)
   {
      $data = $request->all();
      Mail::send('emails.contacto', $data, function ($message) use ($request) {
         //Remitente
         $message->from($request->nombre, $request->telefono, $request->email);

         //Asunto
         $message->subject($request->asunto, $request->mensaje);

         //Receptor 
         $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
      });
      return view("success");
   }
   public function show()
   {

      return view("success");
   }
}
