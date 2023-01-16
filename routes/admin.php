<?php

use App\Http\Controllers;
use App\Http\Controllers\admin;
use App\Http\Controllers\owner;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models;

Route::group(['middleware' => 'auth:admin'], function () { 
Route::view('/admin','admin.admin');
Route::get('/manage_owner','admin\AdminController@manage_owner')->name('manage_owner');
Route::get('/update/{id}','admin\AdminController@update')->name('update');
Route::get('/dashboard','admin\AdminController@dashboard')->name('dashboard');
Route::get('/location','admin\LocationController@location')->name('location');
Route::post('/location','admin\LocationController@create_location')->name('create_location');
Route::get('/capacity','admin\CapacityController@capacity')->name('capacity');
Route::post('/capacity','admin\CapacityController@create_capacity')->name('create_capacity');
Route::get('/bus_type','admin\BustypeController@bus_type')->name('bus_type');
Route::post('/bus_type','admin\BustypeController@create_bus_type')->name('create_bus_type');
});
