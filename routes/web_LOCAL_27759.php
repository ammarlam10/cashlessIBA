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
use App\Role;
use App\Institute;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
	Institute::create([
            'name' => 'institue',
            'area' => 'area',
        ]);

	// Role::create([
 //            'name' => 'test',
 //        ]);
    

    return Institute::all();
});
