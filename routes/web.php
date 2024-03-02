<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Models\Evento;
use App\Models\Experiencia;
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
    $evento = Evento::all();
    return view('welcome', ['eventos' => $evento]);
});


// DASHBOARD
Route::get('/dashboard', [EventoController::class, 'dashboard'])->name('dashboard');

Route::post('/web', [WebController::class, 'web'])->name('web');

Route::prefix('web')->group(function() {

});

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
    Route::get('/evento/editar/{id}', [EventoController::class, 'edit'])->name('editEvento');
    Route::post('/evento/update/{id}', [EventoController::class, 'update'])->name('updateEvento');
    Route::get('/evento/{id}', [EventoController::class, 'destroy']);
    
    // EXPERIENCIA
    Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias');
    Route::get('/addExperiencia', [ExperienciaController::class, 'create'])->name('addExperiencia');
    Route::post('/adExperiencia', [ExperienciaController::class, 'store'])->name('adExperiencia');
    Route::get('/delExperiencia/{id}', [ExperienciaController::class, 'destroy']);
    Route::get('/asociarExperiencia/{id}', [ExperienciaController::class. 'asociacion']);

    // EMPRESA
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');
    Route::get('/addEmpresa', [EmpresaController::class, 'create'])->name('addEmpresa');
    Route::post('/adEmpresa', [EmpresaController::class, 'store'])->name('adEmpresa');
    Route::get('/delEmpresa/{id}', [EmpresaController::class, 'destroy']);
    
    // CATEGORIAS
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
    Route::get('/addCategoria',[CategoriaController::class, 'create'])->name('addCategoria');
    Route::post('/adCategoria', [CategoriaController::class, 'store'])->name("adproducto");
    Route::get('/categoria/{id}', [CategoriaController::class, 'destroy']);
});

Route::prefix('admin')->middleware(['auth', 'verified', 'rol:creadorEventos'])->group(function () { 

});




Route::middleware('auth')->group(function () {
    
});

require __DIR__.'/auth.php';
