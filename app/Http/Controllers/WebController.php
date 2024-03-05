<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Experiencia;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function web() {
        $eventos = Evento::whereDate('fecha', '>=', now())
                 ->take(4)
                 ->get();
        return view('welcome', ['eventos' => $eventos]);
    }

    /**
     * Display a listing of the resource.
     */
    public function indexEvento()
    {
        $eventos = Evento::all();
        return view('/web/eventos', ['eventos' => $eventos]);
    }

    public function indexExperiencia()
    {
        $experiencia = Experiencia::all();
        return view('/web/experiencias', ['experiencias' => $experiencia]);
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
        $evento = Evento::where('id', $id)->first();
        return view('/web/eventos/visualizarEventos', ['evento' => $evento]);
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
