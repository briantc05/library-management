<?php

use App\Http\Controllers\LibrarianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', LibrarianController::class);
