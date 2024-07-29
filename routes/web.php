<?php

use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\GalleryController;
use App\Models\Gallery;
use Lib\Route;

// Ir a la pagina principal

Route::get('/', [HomeController::class, 'index']);

// rutas para crud de contactos

Route::get('/contacts', [ContactController::class, 'index']);

Route::get('/contacts/create', [ContactController::class, 'create']);

Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/contacts/:id', [ContactController::class, 'show']);

Route::get('/contacts/:id/edit', [ContactController::class, 'edit']);

Route::post('/contacts/:id', [ContactController::class, 'update']);

Route::post('/contacts/:id/delete', [ContactController::class, 'destroy']);

//Rutas para el grud de galeria

Route::get('/gallery', [GalleryController::class, 'index']);

Route::post('/gallery/create', [GalleryController::class, 'create']);

Route::post('/gallery', [GalleryController::class, 'store']);

Route::get('/gallery/:id', [GalleryController::class, 'show']);

Route::get('/gallery/:id/edit', [GalleryController::class, 'edit']);

Route::post('/gallery/:id', [GalleryController::class, 'update']);

Route::post('/gallery/:id/delete', [GalleryController::class, 'destroy']);




Route::dispatch();
