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

Blade::setContentTags('<%', '%>');           // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');  // for escaped data

/** ------------------------------------------
 *  API Routes
 *  ------------------------------------------
 */

// route to process the api initialization (app/views/api/index.blade.php)
Route::get('/', ['uses' => 'ApiController@index']);

Route::group(['prefix' => 'api'], function()
{
  // resource REST routes for user (app/views/admin/users/*.blade.php)
  Route::resource('users', 'UsersController');

  // resource REST routes for typologies (app/views/admin/typologies/*.blade.php)
  Route::resource('typologies', 'TypologiesController');

  // resource REST routes for offensives (app/views/admin/offensives/*.blade.php)
  Route::resource('offensives', 'OffensivesController');

  // resource REST routes for replies (app/views/admin/replies/*.blade.php)
  Route::resource('replies', 'RepliesController');

  // resource to send email
  Route::resource('sendmail', 'MailController');
});

/** ------------------------------------------
 *  Login / Logout Routes
 *  ------------------------------------------
 */

// route to show the login form
Route::get('login', function()
{
  if(Auth::check())
    return Redirect::to('admin');
  return View::make('admin.login');
});

// route to process the form (app/views/admin/login.blade.php)
Route::post('login', ['uses' => 'LoginController@doLogin']);

// route to process the logout
Route::get('logout', ['uses' => 'LoginController@doLogout']);


/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */

Route::group(['prefix' => 'admin', 'before' => 'auth'], function()
{

  // main page for the admin (app/views/admin/index.blade.php)
  Route::get('/', ['uses' => 'AdminController@index']);

  // resource REST routes for user (app/views/admin/users/*.blade.php)
  Route::resource('users', 'UsersController');

  // resource REST routes for typologies (app/views/admin/typologies/*.blade.php)
  Route::resource('typologies', 'TypologiesController');

  // resource REST routes for offensives (app/views/admin/offensives/*.blade.php)
  Route::resource('offensives', 'OffensivesController');

  // resource REST routes for replies (app/views/admin/replies/*.blade.php)
  Route::resource('replies', 'RepliesController');

});