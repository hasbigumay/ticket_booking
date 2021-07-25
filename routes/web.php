<?php

use App\Http\Middleware\loginware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/home', 'HomeController@home');
// register route
Route::get('users/regist', 'LoginController@form_regist');
Route::post('users/regist', 'LoginController@insert_data_user');
// login route
Route::get('users/login', 'LoginController@form_login');
Route::post('users/login', 'LoginController@insert_login');

Route::get('profile','ProfileController@profile');

Route::get('myevent','EventController@myevent');
Route::get('event/add','EventController@form_event');
Route::post('event/add','EventController@insert_event');
Route::delete('event/delete','EventController@delete_event');
Route::get('event/list','EventController@list_event');
Route::get('event/edit/{id}','EventController@form_edit')->where('id', '\d');
Route::post('event/edit','EventController@update_event');
Route::get('event/{id}','EventController@detail_event')->where('id', '\d');

Route::get('aboutus','HomeController@aboutus');
Route::get('contactus','HomeController@contactus');

Route::group(['middleware' => ['Loginware']], function () {
    Route::get('/home', 'HomeController@home');
    Route::get('profile','ProfileController@profile');
    Route::get('myevent','EventController@myevent');
    Route::get('event/add','EventController@form_event');
    Route::delete('event/delete','EventController@delete_event');
});
