<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UsersController::class, "index"]);


// Route::get('/admin', function () {

//     return view('layout.admin');
// });

Route::post('/content/create', [ContentController::class, 'store'])->name('content.create') ;

Route::get('/admin', [ContentController::class, 'index'])->name('content.index') ;
