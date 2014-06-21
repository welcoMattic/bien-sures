<?php

class TypologiesController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $typologies = Typology::get();

    if(Request::wantsJson() || Request::is('api/*')) {
      return $typologies;
    }

    return View::make('admin.typologies.index', compact('typologies'));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('admin.typologies.create');
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
      'name' => 'required|max:255'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/typologies/create')
        ->withErrors($validator);

    } else {

      // store validated data
      $typology = new Typology;
      $typology->name = Input::get('name');
      $typology->save();

      // redirect
      Session::flash('message', "Typologie créée");
      Session::flash('alertClass', "success");
      return Redirect::to('admin/typologies');
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
    // get the typology
    $typology = Typology::find($id);

    // show the edit form and pass the user
    return View::make('admin.typologies.edit', compact('typology'));
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
      'name' => 'required|max:255',
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/typologies/create')
        ->withErrors($validator);

    } else {

      // store validated data
      $typology = Typology::find($id);
      $typology->name = Input::get('name');
      $typology->save();

      // redirect
      Session::flash('message', 'Typologie modifiée');
      Session::flash('alertClass', "success");
      return Redirect::to('admin/typologies');
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
    // delete the typology
    $typology = Typology::find($id);
    $typology->delete();

    // redirect
    Session::flash('message', 'Typologie supprimée');
    Session::flash('alertClass', "success");
    return Redirect::to('admin/typologies');
  }


}
