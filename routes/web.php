<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'Main'])->name('Main');
Route::get('about',[MainController::class,'About'])->name('About');
Route::get('gallery',[MainController::class,'Gallery'])->name('Gallery');
Route::get('service',[MainController::class,'Service'])->name('Service');
Route::get('blog',[MainController::class,'Blog'])->name('Blog');
Route::get('post',[MainController::class,'post'])->name('post');
Route::get('contact',[MainController::class,'contact'])->name('contact');


Route::resources([
    'posts'=>PostController::class,
]);




