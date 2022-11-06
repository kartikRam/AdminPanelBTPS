<?php

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
    return view('auth-signin');
});

Route::get('/forget-password', function () {
    return view('auth-reset-password');
});

Route::post('/login', 'App\Http\Controllers\Controller@validate');

Route::post('/addDepoManager', 'App\Http\Controllers\Controller@addManager');



Route::get('/index', 'App\Http\Controllers\Controller@userCount');

Route::get('/ManageDepoManager', 'App\Http\Controllers\Controller@getAllDepoManagerData');

Route::get('/ManageInstitute', 'App\Http\Controllers\Controller@getAllInstituteData');

Route::get('/AddDepoManagerForm', function () {
	session_start();
    return view('AddDepoManagerForm');
});

Route::get('/AddInstituteForm', function () {
	session_start();
    return view('AddInstituteForm');
});

Route::get('/EditInstitute{id}', 'App\Http\Controllers\Controller@editInstituteform');

Route::get('/EditDepoManager{id}', 'App\Http\Controllers\Controller@editManager');

Route::post('/updateDepoManager', 'App\Http\Controllers\Controller@updateManager');

Route::get('/deleteDepoManager{id}', 'App\Http\Controllers\Controller@deleteManager');

Route::get('/deleteInstitute{id}', 'App\Http\Controllers\Controller@deleteInstituteData');

Route::post('/addInstitute', 'App\Http\Controllers\Controller@addInstituteMethod');

Route::get('/logout', 'App\Http\Controllers\Controller@LogOut');

Route::post('/updateInstitute', 'App\Http\Controllers\Controller@updateInstituteForm');


Route::post('/reset', 'App\Http\Controllers\Controller@updatePassword');
