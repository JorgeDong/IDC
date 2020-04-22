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
	 return redirect('/login');
});

Route::post('/data/store', 'InfoController@store');
Route::get('/data', 'InfoController@index');
Route::get('/registro-especie', 'InfoController@registro_especie');
Route::get('/mapa', 'InfoController@mapa');



Route::group(['middleware' => ['auth']], function() {
     Route::POST('especie/save','InfoController@especie_save');
     
     Route::POST('empleados/edit','Catalogs\Employees\EmployeeController@edit');
     Route::POST('empleados/delete','Catalogs\Employees\EmployeeController@delete');
     Route::get('empleados/fetch_data', 'Catalogs\Employees\EmployeeController@fetch_data');
     //Busqueda del select 2 en los roles de empleados
     Route::get('/select2-load-more', 'Catalogs\Employees\EmployeeController@select2LoadMore');

});

//Auth::routes();

// // Authentication Routes...
// Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('admin/login', 'Auth\LoginController@login');
// Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('admin/$56JSHF2$%&$#', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('admin/register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');


// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/reg-56JSHF2', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');



// Auth::routes([
//   'register' => false, // Registration Routes...
//   'reset' => false, // Password Reset Routes...
//   'verify' => false, // Email Verification Routes...
// ]);

Route::get('/home', 'HomeController@index')->name('home');
