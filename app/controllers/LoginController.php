<?php

class LoginController extends BaseController {

  public function doLogin()
  {
    // validate the info, create rules for the inputs
    $rules = [
      'username' => 'required', // make sure the username is filled
      'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('loginError', "Merci de remplir tous les champs"); // set flash error to display message in view
      Session::flash('alertClass', "warning"); // set class to display the error to the right color
      return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

    } else {

      // create our user data for the authentication
      $userdata = [
        'username' => Input::get('username'),
        'password' => Input::get('password')
      ];

      // attempt to do the login
      if (Auth::attempt($userdata)) {

        // validation successful
        return Redirect::to('admin');

      } else {

        // validation not successful, send back to form
        Session::flash('loginError', "Nom d'utilisateur ou mot de passe incorrect"); // set flash error to display message in view
        Session::flash('alertClass', "danger"); // set class to display the error to the right color
        return Redirect::to('login')
          ->withInput(Input::except('password'));

      }

    }
  }

  public function doLogout()
  {
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
  }

}
