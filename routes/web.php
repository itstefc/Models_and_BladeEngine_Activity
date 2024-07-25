<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BookController;


// Redirect root URL to /books
Route::get('/', function () {

    return redirect('/books');
});

Route::get('/books', [BookController::class, 'index']);
