<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    $evento = Evento::whereDate('fecha', '>=', now())
                            ->take(6)
                            ->get();
    return view('welcome', ['eventos' => $evento]);
});

Route::get('/logout', [AuthenticatedSessionController ::class, 'destroy'])->name('milogout');


// DASHBOARD
Route::get('/dashboard', [EventoController::class, 'dashboard'])->name('dashboard');

Route::get('/web', [WebController::class, 'web'])->name('web');

Route::prefix('web')->group(function() {
    // EVENTOS
    Route::get('/categorias', [WebController::class, 'categoriasWeb'])->name('categoriaWeb');
    Route::get('/eventosWeb/{id}', [WebController::class, 'indexEvento'])->name('eventosWeb');
    Route::get('/verEvento/{id}', [WebController::class, 'showEvento'])->name('verEvento');

    // EXPERIENCIAS
    Route::get('/experienciasWeb', [WebController::class, 'indexExperiencia'])->name('experienciasWeb');
    Route::get('/verExperiencia/{id}', [WebController::class, 'showExperiencia'])->name('verExperiencia');

    // EXPLORA
    Route::get('/exploraWeb', [WebController::class, 'index'])->name('exploraWeb');
});

Route::middleware(['auth', 'verified'])->group(function () { 
    Route::post('/inscripcion', [WebController::class, 'inscripcion'])->name('inscripcion');
});

Route::prefix('admin')->middleware(['auth', 'verified', 'mdrol:administrador,creadorEventos'])->group(function () { 
    // PERFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // USUARIOS
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');
    Route::get('/delUsuario/{id}', [ProfileController::class, 'delete']);
    Route::get('/usuario/irCambiarRol/{id}', [ProfileController::class, 'cambiarRol']);
    Route::post('/usuario/updateRol/{id}', [ProfileController::class, 'updateRol']);

    // EVENTOS
    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos');
    Route::get('/addEvento', [EventoController::class, 'create'])->name('addEvento');
    Route::post('/adEvento', [EventoController::class, 'store'])->name('adEvento');
    Route::get('/evento/editar/{id}', [EventoController::class, 'edit'])->name('editEvento');
    Route::post('/evento/update/{id}', [EventoController::class, 'update'])->name('updateEvento');
    Route::get('/evento/{id}', [EventoController::class, 'destroy']);
    Route::get('/evento/verInscritos/{id}', [EventoController::class, 'show']);
    // Route::get('/evento/eliminarInscrito/{id}/{id}', [EventoController::class, 'borrarInscripcion']);
    
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

require __DIR__.'/auth.php';
