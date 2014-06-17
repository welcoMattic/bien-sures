<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Login / Logout Routes
 *  ------------------------------------------
 */

// route to show the login form
Route::get('login', function()
{
  return View::make('admin.login');
});

// route to process the form (app/views/admin/login.blade.php)
Route::post('login', array('uses' => 'LoginController@doLogin'));

// route to process the logout
Route::get('logout', array('uses' => 'LoginController@doLogout'));


/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

  // main page for the admin (app/views/admin/dashboard.blade.php)
  Route::get('dashboard', function()
  {
    return View::make('admin.dashboard');
  });

  // main page for the user (app/views/admin/user.blade.php)
  Route::get('user', function()
  {
    return View::make('admin.user');
  });

});