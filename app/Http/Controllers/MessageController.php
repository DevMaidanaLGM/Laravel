<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
  public function store(){
    $message = request()->validate([
      'name' => 'required',
      'email'=> 'required|email',
      'subject' =>'required',
      'content' =>'required|min:3'
    ],[
      'name.required' => __('Please, enter your name, I really need it')

    ]
  );

  Mail::to('probando@email.com')->queue(new MessageReceived($message));
  return back()->with('status', 'Recibimos tu mensaje,
  te responderemos pronto...');
  }



}
