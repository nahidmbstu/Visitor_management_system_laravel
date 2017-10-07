<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('guest', function () {
//     return view('show');
// });

Route::resource('guest','GuestController');

Route::get('create', 'GuestController@create');

Route::get('delete/{id}','GuestController@destroy');

Route::get('/logcheck', ['middleware' => 'auth', 'uses' => 'GuestController@check']);

Route::get('/report', 'reportController@index');

Route::post('report/result', 'reportController@showResult');

Route::get('/settings', 'settingsController@index');


Route::get('report/result/pdf', 'PDFController@pdf');

Route::get('/print/{id}', 'printController@index');





