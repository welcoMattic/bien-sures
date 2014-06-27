<?php

class MailController extends \BaseController {


  public function index()
  {
    if(!Input::has('first_name','last_name','mail_from','message')) {
      return Response::json(array('status' => 'error', 'description' => 'missing fields'));
    }

    $data = array( 
              'first_name' => Input::get( 'first_name' ),
              'last_name' => Input::get( 'last_name' ),
              'mail_from' => Input::get( 'mail_from' ),
              'message' => Input::get( 'message' )
            );

    Mail::send('emails.contact', $data, function($message)
    {
      $message->to('aurelien.digout@gmail.com', 'John Smith')->subject('Welcome!');
    });

    return Response::json(array('status' => 'success'));
  }

}
