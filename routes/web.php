<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// Route::method('/route', [ControllerName::class, 'function_name'])->name('unique.name');
// route is named 'form.index', naming routes is useful for generating URLs or redirecting to specific routes using route's name instead of URL

Route::get('/index', [FormController::class, 'index'])->name('form.index');
Route::get('/input', [FormController::class, 'input'])->name('form.input');
Route::post('/form', [FormController::class, 'save'])->name('form.save');
Route::get('/{form}/edit', [FormController::class, 'edit'])->name('form.edit');
Route::put('/{form}', [FormController::class, 'update'])->name('form.update');
Route::delete('/{form}', [FormController::class, 'delete'])->name('form.delete');
