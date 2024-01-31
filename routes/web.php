<?php

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
