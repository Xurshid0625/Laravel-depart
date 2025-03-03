<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'Main'])->name('Main');
Route::get('/about',[MainController::class,'About'])->name('About');
Route::get('gallery',[MainController::class,'Gallery'])->name('Gallery');
Route::get('service',[MainController::class,'Service'])->name('Service');
Route::get('blog',[MainController::class,'Blog'])->name('Blog');


