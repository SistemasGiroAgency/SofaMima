<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\SofaController::class, 'index']);
Route::get("/catalogo", [App\Http\Controllers\SofaController::class, 'catalogo']);
Route::get('/{id}/singleproducts', [App\Http\Controllers\SofaController::class, 'singleproducts'])->name('index.singleproducts');
Route::get('/sobrenosotros', [App\Http\Controllers\SofaController::class, 'about']);
Route::get('/blog', [App\Http\Controllers\SofaController::class, 'blog'])->name('index.blog');
Route::get('/{id}/singlepost', [App\Http\Controllers\SofaController::class, 'singlepost'])->name('index.singlepost');
Route::get('/contacto', [App\Http\Controllers\SofaController::class, 'contacto']);
Route::get('/faqs', [App\Http\Controllers\SofaController::class, 'faqs']);
Route::get('/wishlist', [App\Http\Controllers\SofaController::class, 'wishlist']);

Route::post('/correo', [App\Http\Controllers\EMAILController::class, 'correo']);
Route::post('/preguntas', [App\Http\Controllers\EMAILController::class, 'preguntas']);
Route::post('/correolanding', [App\Http\Controllers\EMAILController::class, 'correolanding']);

Route::get('CRUD/admin', [App\Http\Controllers\Admin::class, 'admin'])->name('CRUD.admin');
Route::post('CRUD', [App\Http\Controllers\CRUDNOTAS::class, 'store'])->name('CRUD.store');
Route::get('CRUD/create', [App\Http\Controllers\CRUDNOTAS::class, 'create'])->name('CRUD.create');
Route::get('CRUD/{id}/edit', [App\Http\Controllers\CRUDNOTAS::class, 'edit'])->name('CRUD.edit');
Route::put('CRUD/{id}', [App\Http\Controllers\CRUDNOTAS::class, 'update'])->name('CRUD.update');
Route::delete('CRUD/{id}', [App\Http\Controllers\CRUDNOTAS::class, 'destroy'])->name('CRUD.destroy');

Route::get('CATALOGO/secciondeproductos', [App\Http\Controllers\Admin::class, 'secciondeproductos'])->name('CATALOGO.secciondeproductos');
Route::post('CATALOGO', [App\Http\Controllers\CRUDCATALOGO::class, 'storedos'])->name('CATALOGO.storedos');
Route::get('CATALOGO/createdos', [App\Http\Controllers\CRUDCATALOGO::class, 'createdos'])->name('CATALOGO.createdos');
Route::get('CATALOGO/{id}/editdos', [App\Http\Controllers\CRUDCATALOGO::class, 'editdos'])->name('CATALOGO.editdos');
Route::put('CATALOGO/{id}', [App\Http\Controllers\CRUDCATALOGO::class, 'updatedos'])->name('CATALOGO.updatedos');
Route::delete('CATALOGO/{id}', [App\Http\Controllers\CRUDCATALOGO::class, 'destroydos'])->name('CATALOGO.destroydos');

Route::get('/landing', [App\Http\Controllers\Landing::class, 'landing']);