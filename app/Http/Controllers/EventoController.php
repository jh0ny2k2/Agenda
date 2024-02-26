<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Evento;
use App\Models\Experiencia;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function dashboard()
    {
        $eventos = Evento::count();
        $categorias = Categoria::count();
        $usuarios = User::count();
        $empresas = Empresa::count();
        $experiencia = Experiencia::count();

        return view('dashboard', ['evento' => $eventos, 'categoria' => $categorias, 'usuario' => $usuarios, 'empresa' => $empresas, 'experiencia' => $experiencia]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
