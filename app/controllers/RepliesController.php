<?php

class RepliesController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    if(Request::wantsJson() || Request::is('api/*')) {
      $replies = DB::table('replies')->where( 'status_', 'accepted' )->get();
      return $replies;
    } else {
      $replies = Reply::get();
      return View::make('admin.replies.index', compact('replies'));
    }

  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
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
      'quote'       => 'required|max:140',
      'typology_id' => 'required'
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

      if(Request::wantsJson() || Request::is('api/*')) {
        return Response::json(array('status' => 'error'));
      }

      Session::flash('message', "Merci de vérifier tous les champs");
      Session::flash('alertClass', "warning");
      return Redirect::to('admin/offensives/create')
        ->withErrors($validator);

    } else {

      // store validated data
      $reply = new Reply;
      $reply->quote = Input::get('quote');
      $reply->typology_id = Input::get('typology_id');
      $reply->save();

      if(Request::wantsJson() || Request::is('api/*')) {
        return Response::json(array('status' => 'success'));
      }

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
    $reply = Reply::find($id);
    $offensives = Offensive::get();

    // show the edit form and pass the user
    return View::make('admin.replies.edit', compact('reply', 'offensives'));
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    // store validated data
    $reply = Reply::find($id);
    if(Input::has('quote')) $reply->quote = Input::get('quote');
    if(Input::has('typology_id')) $reply->quote = Input::get('typology_id');
    $reply->status_ = Input::get('status_');
    $reply->save();

    // redirect
    Session::flash('message', 'Réplique acceptée');
    Session::flash('alertClass', "success");
    return Redirect::to('admin/replies');
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    // delete the reply
    $reply = Reply::find($id);
    $reply->delete();

    // redirect
    Session::flash('message', 'Réplique supprimée');
    Session::flash('alertClass', "success");
    return Redirect::to('admin/replies');
  }


}
