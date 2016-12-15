<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){

      // if(!$request->has('name') || !$request->has('email') || !$request->has('message')) {
      //   return back()->with('mensaje_error', 'Asegurese de especificar un nombre, un e-mail y un mensaje por favor');
      // }
      // if (!filter_var($request->email,FILTER_VALIDATE_EMAIL)) {
      //   return back()->with('mensaje_error', 'El e-mail ingresado no es valido');
      // }
      //
      // Mail::send('containerPages.home', ['name' => $request->name, 'content' => $request->message], function ($message)
      //   {
      //
      //       $message->from('me@gmail.com', 'Christian Nwamba');
      //
      //       $message->to('elnegroleo9@gmail.com');
      //
      //   });

      $this->validate($request, [
          'email'   => 'required|email',
          'name'    => 'required',
          'message' => 'required']);

      $data = array(
          'email'=> $request->email,
          'name'=> $request->name,
          'bodyMessage' => $request->message
      );

      Mail::send('containerPages.contacto', $data, function($message) use ($data) {
          $message->from($data['email']);
          $message->to('elnegroleo9@gmail.com');
          $message->subject($data['bodyMessage']);
      });

      return back()->with('mensaje_exitoso', 'Su mensaje fue enviado con exito');
    }
}
