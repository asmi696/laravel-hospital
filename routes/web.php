<?php
// use App\Patient;
// Route::get('/public', function (){
//    echo  $user_id=Auth::user()->id;   die();
// });
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

Auth::routes();
Auth::routes(['verify' => true]);
// Route::get('/emailverify', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile', 'PatientController@index');
Route::get('/', 'PatientController@manage');
Route::get('/autocomplete', 'PatientController@autocomplete');
Route::post('/autocomplete/fetch', 'PatientController@fetch')->name('autocomplete.fetch');
