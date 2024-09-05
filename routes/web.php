<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', [ContentController::class, 'users'])->name('users.view') ;





// Route::get('/admin', function () {

//     return view('layout.admin');
// });

Route::post('/content/create', [ContentController::class, 'store'])->name('content.create') ;
Route::post('/content/update/{id}', [ContentController::class, 'update'])->name('content.update') ;

Route::get('/admin', [ContentController::class, 'index'])->name('content.index') ;
Route::post('/admin/{id}', [ContentController::class, 'destroy'])->name('content.destroy') ;

Route::get('/content/edit/{id}', [ContentController::class, 'edit'])->name('content.edit') ;

