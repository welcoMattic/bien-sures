<?php

class UsersController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = User::get();

    return View::make('admin.users.index', compact('users'));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('admin.users.create');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
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

      Session::flash('storeError', "Merci de vérifier tous les champs"); // set flash error to display message in view
      Session::flash('alertClass', "warning"); // set class to display the error to the right color
      return Redirect::to('admin/users/create')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

    } else {

      // store validated data
      $user = new User;
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      // redirect
      return Redirect::to('admin/users');
    }
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    // get the user
    $user = User::find($id);

    // show the view and pass the user to it
    return View::make('admin.users.show', compact('user'));
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    // get the user
    $user = User::find($id);

    // show the edit form and pass the user
    return View::make('admin.users.edit', compact('user'));
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
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

      Session::flash('storeError', "Merci de vérifier tous les champs"); // set flash error to display message in view
      Session::flash('alertClass', "warning"); // set class to display the error to the right color
      return Redirect::to('admin/users/create')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

    } else {

      // store validated data
      $user = User::find($id);
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      // redirect
      return Redirect::to('admin/users');
    }
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }


}
