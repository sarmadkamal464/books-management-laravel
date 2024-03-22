<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'Role:admin'])->prefix('admin')->name('admin.')->group(function (){
    Route::get('dashboard', function () {
        return view('home');
    })->name('dashboard');
    Route::get('users', function (){
        return view('admin.users.index');
    })->name('users');
    Route::get('books', function (){
        return view('admin.books.index');
    })->name('books');
});

Route::middleware(['auth'])->prefix('website')->group(function (){

});
