<?php
use Illuminate\Http\Request;

define('SITE_NAME', 'Laravel-Market');
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'/');

include_once SITE_ROOT.'/common.php';

Route::match(['get', 'post'], '/', function() {
  return redirect('/feed');
});

Route::match(['get', 'post'], '/feed', function() {
  return redirect('/feed');
});

Route::match(['get', 'post'], '/logout', function() {
    Session::flush();
    return redirect('/');


});

Route::get('/reg', 'RegController@index');
Route::post('/reg', 'RegController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@index');

Route::get('/id{profile_id}', 'ProfileController@index');