<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
    Route::get('dashboard', function () {
        return view('home');
    })->name('dashboard');
    Route::get('users', function (){
        return view('admin.users.index');
    });
    Route::get('books', function (){
        return view('admin.books.index');
    })->name('books');
});

Route::middleware(['auth'])->prefix('website')->group(function (){
   

});