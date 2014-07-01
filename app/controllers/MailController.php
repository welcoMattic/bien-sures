<?php

class MailController extends \BaseController {


  public function index()
  {
    if(!Input::has('first_name','last_name','mail_from','subject','message')) {
      return Input::all();
      return Response::json(array('status' => 'error', 'description' => 'missing fields'));
    }

    $data = [
      'first_name' => Input::get('first_name'),
      'last_name'  => Input::get('last_name'),
      'mail_from'  => Input::get('mail_from'),
      'subject'    => Input::get('subject'),
      'body'    => Input::get('message')
    ];

    Mail::send('emails.contact', $data, function($message)
    {
      $message->to('contact@bien-sures.fr', 'Bien Sûres')->subject('Contact de bien-sures.fr : ' . Input::get('subject'));
    });

    return Response::json(array('status' => 'success'));
  }

}
