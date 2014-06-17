<?php

class AdminController extends \BaseController {

    public function index()
    {
        $offensives = Offensive::get();
        $replies = Reply::get();

        return View::make('admin.index', compact('offensives', 'replies'));
    }

}