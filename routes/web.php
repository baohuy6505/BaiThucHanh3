<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('/');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/beans-story',[PageController::class,'beansStory'])->name('beansStory');
Route::get('/menu',[PageController::class,'menu'])->name('menu');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/detail/{id}',[PageController::class,'detail'])->name('detail');