<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Entries
Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');

Route::get('/entries/{entry}', 'GuestController@show')->name('entries.show');
Route::get('/entries/{entry}/edit', 'GuestController@edit')->name('entries.edit');
Route::put('/entries/{entry}', 'GuestController@update')->name('entries.update');

// User guest

Route::get('/users/{user}', 'UserController@show')->name('users.show');
