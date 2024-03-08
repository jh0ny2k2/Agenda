<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Experiencia;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{

    public function web() {
        $eventos = Evento::whereDate('fecha', '>=', now())
                 ->take(6)
                 ->get();
        return view('welcome', ['eventos' => $eventos]);
    }

    public function categoriasWeb() {
        $categoria = Categoria::all();
        return view('/web/eventos/categoriasEvento', ['categorias' => $categoria]);
    }



    /**
     * Display a listing of the resource.
     */
    public function inscripcion(Request $request)
    {
        $evento = new Inscripcion();
        $evento->userId = Auth::user()->id;
        $evento->eventoId = $request->id;
        $evento->numEntradas = $request->entradas;
        $evento->estado = 'recibida';
        $evento->save();

        return redirect()->route('categoriaWeb');
    }

    public function indexExperiencia()
    {
        $experiencia = Experiencia::all();
        return view('/web/experiencias', ['experiencias' => $experiencia]);
    }

    public function indexEvento($id)
    {
        $eventos = Evento::where('categoriaId', $id)->whereDate('fecha', '>=', now())->get();
        return view('/web/eventos', ['eventos' => $eventos]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/web/explora');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    public function showEvento(string $id)
    {
        $evento = Evento::findOrFail($id);
    
        // Recuperar inscripciones para el evento
        $inscripciones = Inscripcion::where('eventoId', $id)->get();

        // Recuperar usuarios asociados a las inscripciones
        $usuarios = [];
        foreach ($inscripciones as $inscripcion) {
            $usuario = User::findOrFail($inscripcion->userId);
            $usuarios[] = $usuario;
        }

        // Pasar datos a la vista
        return view('/web/eventos/visualizarEventos', [
            'evento' => $evento,
            'inscripciones' => $inscripciones,
            'usuarios' => $usuarios
        ]);
    }

    public function showExperiencia(string $id)
    {
        $experiencia = Experiencia::where('id', $id)->first();
        return view('/web/experiencias/visualizarExperiencia', ['experiencia' => $experiencia]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
