<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExperienciaController;
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

// DASHBOARD
Route::get('/dashboard', [EventoController::class, 'dashboard'])->name('dashboard');



Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () { 
    // PERFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // USUARIOS
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');
    Route::get('/delUsuario/{id}', [ProfileController::class, 'delete']);

    // EVENTOS
    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos');
    Route::get('/addEvento', [EventoController::class, 'create'])->name('addEvento');
    Route::post('/adEvento', [EventoController::class, 'store'])->name('adEvento');
    Route::get('/evento/editar/{id}', [EventoController::class, 'edit']);
    Route::get('/evento/{id}', [EventoController::class, 'delete'])->name('eliminarEvento');
    
    // EXPERIENCIA
    Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias');
    
    
    // EMPRESA
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');
    Route::get('/addEmpresa', [EmpresaController::class, 'create'])->name('addEmpresa');
    Route::post('/adEmpresa', [EmpresaController::class, 'store'])->name('adEmpresa');
    Route::get('/delEmpresa/{id}', [EmpresaController::class, 'delete']);
    
    // CATEGORIAS
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
    Route::get('/addCategoria',[CategoriaController::class, 'create'])->name('addCategoria');
    Route::post('/adCategoria', [CategoriaController::class, 'store'])->name("adproducto");
    Route::get('/admin/categoria/{id}', [CategoriaController::class, 'destroy']);
});

Route::prefix('admin')->middleware(['auth', 'verified', 'rol:creadorEventos'])->group(function () { 

});




Route::middleware('auth')->group(function () {
    
});

require __DIR__.'/auth.php';
