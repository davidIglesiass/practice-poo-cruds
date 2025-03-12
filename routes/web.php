<?php

use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\GalleryController;
use App\Controllers\AirportController;
use Lib\Route;

// Homepage

Route::get('/', [HomeController::class, 'index']);

// Contacts

Route::get('/contacts', [ContactController::class, 'index']);

Route::get('/contacts/create', [ContactController::class, 'create']);

Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/contacts/:id', [ContactController::class, 'show']);

Route::get('/contacts/:id/edit', [ContactController::class, 'edit']);

Route::post('/contacts/:id', [ContactController::class, 'update']);

Route::post('/contacts/:id/delete', [ContactController::class, 'destroy']);

//Gallery

Route::get('/gallery', [GalleryController::class, 'index']);

Route::post('/gallery/create', [GalleryController::class, 'create']);

Route::get('/gallery/:id', [GalleryController::class, 'show']);

Route::post('/gallery/:id/update', [GalleryController::class, 'update']);

Route::post('/gallery/:id/delete', [GalleryController::class, 'destroy']);

//Airport
Route::get('/airport', [AirportController::class, 'index']);



Route::dispatch();
