<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Resource
Route::resource('produtos',ProductoController::class);
Route::get('/', [SiteController::class,"index"])->name("site.index");
Route::get('/producto/{slug}', [SiteController::class,"details"])->name("site.details");
Route::get('/categoria/{id}', [SiteController::class,"categoria"])->name("site.categoria");
