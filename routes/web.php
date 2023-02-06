<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

//Route::get('/home', 'Admin\HomeController@index')->name('home');

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
            Route::get('/', 'HomeController@index')->name('dashboard');
            Route::resource('posts', 'PostController');
});

Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*")->name('guest.home');
