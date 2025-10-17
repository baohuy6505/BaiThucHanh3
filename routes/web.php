<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/beans-story',[PageController::class,'beansStory']);
Route::get('/menu',[PageController::class,'menu']);
Route::get('/contact',[PageController::class,'contact']);