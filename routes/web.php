<?php

use App\Http\Controllers;
use App\Http\Controllers\admin;
use App\Http\Controllers\owner;
use App\Http\Controllers\user;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models;
use\App\Models\Location;
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
Auth::routes();
Route::get('/','user\UserController@welcome')->name('welcome');
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::get('/login/owner', [LoginController::class,'showOwnerLoginForm']);
Route::post('/login/owner', [LoginController::class,'ownerLogin']);
Route::get('/register/owner', [RegisterController::class,'showOwnerRegisterForm']);
Route::post('/register/owner', [RegisterController::class,'createOwner']);
Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/transaction','user\TransactionController@transaction')->name('transaction');
Route::post('/transaction','user\TransactionController@createTransaction')->name('create_transaction');
Route::get('/search','user\SearchController@search')->name('search');
Route::get('/booking','user\BookingController@booking')->name('booking');
Route::post('/booking','user\BookingController@create_booking')->name('create_booking');
