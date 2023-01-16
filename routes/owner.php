<?php
use App\Http\Controllers;
use App\Http\Controllers\owner;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models;


Route::group(['middleware' => ['auth:owner','checkapproval']], function () {
Route::view('/owner', 'owner.owner')->name('owner');
Route::get('/bus','owner\OwnerController@bus')->name('bus');
Route::post('/bus','owner\OwnerController@createBus')->name('createbus');
Route::get('/view_profile','owner\ProfileController@view_profile')->name('view_profile');
Route::get('/edit_profile','owner\ProfileController@edit_profile')->name('edit_profile');
Route::put('/update_profile/{id}','owner\ProfileController@update_profile')->name('update_profile');
Route::get('/busRoute','owner\BusRouteController@busRoute')->name('busRoute');
Route::post('/createbusRoute','owner\BusRouteController@createBusRoute')->name('createBusRoute');
Route::get('/view_bus','owner\BusController@view_bus')->name('view_bus');
});