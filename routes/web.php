<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\SofaController::class, 'index']);
Route::get("/catalogo", [App\Http\Controllers\SofaController::class, 'catalogo']);
Route::get('/{id}/singleproducts', [App\Http\Controllers\SofaController::class, 'singleproducts'])->name('index.singleproducts');
Route::get('/sobrenosotros', [App\Http\Controllers\SofaController::class, 'about']);
Route::get('/blog', [App\Http\Controllers\SofaController::class, 'blog'])->name('index.blog');
Route::get('/{id}/singlepost', [App\Http\Controllers\SofaController::class, 'singlepost'])->name('index.singlepost');
Route::get('/contacto', [App\Http\Controllers\SofaController::class, 'contacto']);
Route::post('/correo', [App\Http\Controllers\SofaController::class, 'correo'])->name('correo');
Route::get('/faqs', [App\Http\Controllers\SofaController::class, 'faqs']);
Route::post('/preguntas', [App\Http\Controllers\SofaController::class, 'preguntas'])->name('preguntas');
Route::get('/wishlist', [App\Http\Controllers\SofaController::class, 'wishlist']);

Route::get('CRUD/admin', [App\Http\Controllers\SofaController::class, 'admin'])->name('CRUD.admin');
Route::post('CRUD', [App\Http\Controllers\SofaController::class, 'store'])->name('CRUD.store');
Route::get('CRUD/create', [App\Http\Controllers\SofaController::class, 'create'])->name('CRUD.create');
Route::get('CRUD/{id}/edit', [App\Http\Controllers\SofaController::class, 'edit'])->name('CRUD.edit');
Route::put('CRUD/{id}', [App\Http\Controllers\SofaController::class, 'update'])->name('CRUD.update');
Route::delete('CRUD/{id}', [App\Http\Controllers\SofaController::class, 'destroy'])->name('CRUD.destroy');

Route::get('CATALOGO/secciondeproductos', [App\Http\Controllers\SofaController::class, 'secciondeproductos'])->name('CATALOGO.secciondeproductos');
Route::post('CATALOGO', [App\Http\Controllers\SofaController::class, 'storedos'])->name('CATALOGO.storedos');
Route::get('CATALOGO/createdos', [App\Http\Controllers\SofaController::class, 'createdos'])->name('CATALOGO.createdos');
Route::get('CATALOGO/{id}/editdos', [App\Http\Controllers\SofaController::class, 'editdos'])->name('CATALOGO.editdos');
Route::put('CATALOGO/{id}', [App\Http\Controllers\SofaController::class, 'updatedos'])->name('CATALOGO.updatedos');
Route::delete('CATALOGO/{id}', [App\Http\Controllers\SofaController::class, 'destroydos'])->name('CATALOGO.destroydos');

Route::get('/prueba', [App\Http\Controllers\SofaController::class, 'prueba']);