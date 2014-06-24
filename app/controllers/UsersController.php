<?php

class UsersController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // get users
    $users = User::get();

    // show the view and pass users to it
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
      'username' => 'required',
      'password' => 'required|alphaNum|min:3'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/users/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));

    } else {

      // store validated data
      $user = new User;
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      // redirect
      Session::flash('message', "Utilisateur créé");
      Session::flash('alertClass', "success");
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
    //
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
      'password' => 'alphaNum|min:3'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/users/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));

    } else {

      // store validated data
      $user = User::find($id);
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      // redirect
      Session::flash('message', 'Utilisateur modifié');
      Session::flash('alertClass', "success");
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
    // delete the user
    $user = User::find($id);
    $user->delete();

    // redirect
    Session::flash('message', 'Utilisateur supprimé');
    Session::flash('alertClass', "success");
    return Redirect::to('admin/users');
  }


}
