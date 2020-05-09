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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('user-interface.index');
// });
Route::get('/profil', function () {
    return view('user-interface.profile');
});
Route::get('/gtk-sd', 'GtkSdController@index')->name('GtkSdIndex');
Route::get('/gtk-paud', 'GtkPaudController@index')->name('GtkPaudIndex');
Route::get('/gtk-smp', 'GtkSmpController@index')->name('GtkSmpIndex');

Route::get('/galeri', 'GaleryController@index')->name('galeri');
Route::get('/','MainWebController@index')->name('gtk');


//berita route
Route::get('/berita','BeritaController@index')->name('indexberita');
Route::get('/berita/{id}','BeritaController@show')->name('showberita');
 
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('news', 'newsController');

Route::resource('heads', 'HeadController');

Route::resource('employees', 'EmployeeController');

Route::resource('gtks', 'GtkController');

Route::resource('galeris', 'GaleriController');