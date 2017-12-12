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
use App\User;
use App\Wallet;
use App\Role;
use App\Institute;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Authentication Routes...
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test', function () {
	// Institute::create([
 //            'name' => 'IBA',
 //            'area' => 'KU',
 //        ]);
	// Institute::create([
 //            'name' => 'CBM',
 //            'area' => 'korangi',
 //        ]);

	// Institute::create([
 //            'name' => 'Szabist',
 //            'area' => 'Clifton',
 //    ]);


	// Role::create([
 //            'name' => 'Admin',
 //        ]);
 //    	Role::create([
 //            'name' => 'User',
 //        ]);


    return User::all();
});

Route::resources([
'institute' => 'instituteController',
'roles' => 'rolesController'
	]);


