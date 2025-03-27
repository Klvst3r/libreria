<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('alan');
});*/

// 1. Index
Route::get('/', [LibroController::class, 'index'])->name('index'); 

Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');

//Route::get('/layout', [LibroController::class, 'layout'])->name('layout');

//2. Create
Route::get('create', [LibroController::class, 'create'])->name('libros.create');

//3. Store
Route::post('store', [LibroController::class, 'store'])->name('libros.store');
