<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Entries
Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');

Route::get('/entries/{entryBySlug}', 'GuestController@show')->name('entries.show');

Route::get('/entries/{entry}/edit', 'EntryController@edit')->name('entries.edit');
Route::put('/entries/{entry}', 'EntryController@update')->name('entries.update');

// User guest

Route::get('/@{user}', 'UserController@show')->name('users.show');
