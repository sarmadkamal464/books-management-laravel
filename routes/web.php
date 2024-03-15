<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return view('welcome');
    });
    Route::get('users', function (){
        return view('admin.users.index');
    });
});
