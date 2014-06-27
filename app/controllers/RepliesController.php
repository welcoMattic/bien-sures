<?php

class RepliesController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $replies = DB::table('replies')->where( 'status_', 'accepted' )->get();

    if(Request::wantsJson() || Request::is('api/*')) {
      return $replies;
    }

    return View::make('admin.replies.index', compact('replies'));
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
      'typologie_id' => 'required'
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
      $Replie = new Reply;
      $Replie->quote = Input::get('quote');
      $Replie->typologie_id = Input::get('typologie_id');
      $Replie->save();

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
    // receive json object from angular
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
