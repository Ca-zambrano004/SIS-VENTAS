<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
   public function index()
   {

      return view("contacto");
   }
   public function contact(Request $request)
   {
      $data = $request->all();
      Mail::send('emails.email', $data, function ($message) use ($request) {
         //Remitente
         $message->from($request->nombre, $request->telefono, $request->email);

         //Asunto
         $message->subject($request->asunto, $request->mensaje);

         //Receptor 
         $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
      });

      dd(env('MAIL_USERNAME'));
      return view("success");
   }
   /**   public function show()
   {

      return view("success");
   }*/
}
