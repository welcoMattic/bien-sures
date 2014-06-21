<?php

class ApiController extends \BaseController {

    public function index()
    {
        return View::make('api.index');
    }

}