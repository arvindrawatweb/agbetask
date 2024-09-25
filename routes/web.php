<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;




                Route::controller(HomeController::class)->group(function(){
                Route::get('/', 'index')->name('home');
                Route::get('/data','getdata')->name('getdata');
                });


                Route::middleware('auth')->group(function () {
                Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard'); 
                Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
                });



                Route::controller(UsersController::class)->group(function () {
                Route::get('/login', 'login')->name('login');
                Route::post('/userlogin', 'userlogin')->name('userlogin');

                Route::get('/user','userform')->name('userform');
                Route::post('/user_store','store')->name('store');
                Route::get('/user','userform')->name('userform');
                Route::post('/user_store','store')->name('store');
                });



Route::get('/getState', [LocationController::class, 'getstates'])->name('getstate');
Route::get('/getcity',[LocationController::class,'getcitys'])->name('getcity');




