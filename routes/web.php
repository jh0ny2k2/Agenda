<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () { 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // MOSTRAMOS TODOS LOS DATOS
    Route::get('/dashboard', [EventoController::class, 'dashboard'])->name('dashboard');
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias'); 
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios'); 
});

Route::prefix('admin')->middleware(['auth', 'verified', 'rol:creadorEventos'])->group(function () { 

});




Route::middleware('auth')->group(function () {
    
});

require __DIR__.'/auth.php';
