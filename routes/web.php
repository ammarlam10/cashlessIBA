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
use App\Account;
use App\transaction;
use Illuminate\Http\Request;



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
Route::get('/transaction','transactionController@index');
Route::get('/transaction/create','transactionController@create');
Route::post('/transaction','transactionController@store');
Route::Post('/transactionI','transactionController@institute');


//   WITHDRAW
Route::get('/withdraw', function () {
    
    return view('account.withdraw');
});
Route::post('/withdraw', function (Request $request) {
	$user = Auth::user();
	Account::create([
            'account' => $request->account,
           	'amount' => $request->amount,
           	'type' =>  1,
            'user_id' => $user->id,
        ]);
	Transaction::create([
		'to_id'=>$user->id,
		'from_id'=>$user->id,
		'amount'=>$request->amount,
		'description'=>"withdrawn from ".$request->account

		]);

	$user->wallet->balance = $user->wallet->balance + $request->amount;
	$user->wallet->save();
	return redirect('home');
	
});

//	DEPOSIT

Route::get('/deposit', function () {
    
    return view('account.deposit');
});

Route::post('/deposit', function (Request $request) {
	$user = Auth::user();
	Account::create([
            'account' => $request->account,
           	'amount' => $request->amount,
           	'type' =>  2,
            'user_id' => $user->id,
        ]);
		Transaction::create([
		'to_id'=>$user->id,
		'from_id'=>$user->id,
		'amount'=>$request->amount,
		'description'=>"Diposited to ".$request->account

		]);


	// if no bal send error
	$user->wallet->balance = $user->wallet->balance - $request->amount;
	$user->wallet->save();
	return $user->wallet;
	
});



Route::resources([
'admin/institute' => 'instituteController',
'admin/roles' => 'rolesController'
	]);


