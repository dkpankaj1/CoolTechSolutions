<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ComplainController;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/services',[PageController::class,'services'])->name('services');


Route::group(['prefix' => 'complain', 'as' => 'complain.'], function () {
    Route::get('/create', [ComplainController::class, 'create'])->name('create');
    Route::post('/store', [ComplainController::class, 'store'])->name('store');
});