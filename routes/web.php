<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('formregister');
});
// returns the form for adding a post
Route::get('/create', MarriageFormController::class . '@create')->name('marriage-form.create');
// adds a post to the database
Route::post('/posts', MarriageFormController::class .'@store')->name('marriage-form.store');  

//Route::post('/', [MarriageFormController::class, 'store']);
