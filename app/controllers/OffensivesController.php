<?php

class OffensivesController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $offensives = Offensive::get();

    return View::make('admin.offensives.index', compact('offensives'));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('admin.offensives.create');
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
      'description' => 'required|max:21844',
      'quote'       => 'required|max:21844'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/offensives/create')
        ->withErrors($validator);

    } else {

      // store validated data
      $offensive = new Offensive;
      $offensive->description = Input::get('description');
      $offensive->quote = Input::get('quote');
      $offensive->save();

      // redirect
      Session::flash('message', "Agression créée");
      Session::flash('alertClass', "success");
      return Redirect::to('admin/offensives');
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
    // send json object to angular
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    // get the offensive
    $offensive = Offensive::find($id);

    // show the edit form and pass the user
    return View::make('admin.offensives.edit', compact('offensive'));
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
      'description' => 'required|max:21844',
      'quote'       => 'required|max:21844'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/offensives/create')
        ->withErrors($validator);

    } else {

      // store validated data
      $offensive = Offensive::find($id);
      $offensive->description = Input::get('description');
      $offensive->quote = Input::get('quote');
      $offensive->save();

      // redirect
      Session::flash('message', 'Agression modifiée');
      Session::flash('alertClass', "success");
      return Redirect::to('admin/offensives');
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
    // delete the offensive
    $offensive = Offensive::find($id);
    $offensive->delete();

    // redirect
    Session::flash('message', 'Agression supprimée');
    Session::flash('alertClass', "success");
    return Redirect::to('admin/offensives');
  }


}
