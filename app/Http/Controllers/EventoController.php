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

    public function web() {
        return view('welcome');
    }

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
        $eventos = Evento::all();
        return view('/dashboard/evento', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('/dashboard/evento/addEvento', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->descripcion = $request->descripcion;
        $evento->ciudad = $request->ciudad;
        $evento->direccion = $request->direccion;
        $evento->estado = $request->estado;
        $evento->aforoMax = $request->capacidad;
        $evento->tipo = $request->tipo;
        $evento->numMaxEntradasPorPersona  = $request->entradas;
        $evento->CategoriaId =  $request->categorias;
        $evento->save();

        $id = $evento->id;
        $request->file('imagen')->storeAs(
            'public',
            'evento_' . $id . '.jpg'
        );
        return redirect()->route('eventos'); 

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $evento = Evento::where('id', $id)->first();
        return view('/dashboard/evento/editEvento', ['eventos' => $evento, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evento = Evento::where('id', $request->id)->first();
        $evento->nombre = $request->nombre;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->descripcion = $request->descripcion;
        $evento->ciudad = $request->ciudad;
        $evento->direccion = $request->direccion;
        $evento->estado = $request->estado;
        $evento->aforoMax = $request->capacidad;
        $evento->tipo = $request->tipo;
        $evento->numMaxEntradasPorPersona  = $request->entradas;
        $evento->CategoriaId =  $request->categorias;
        $evento->save();

        return redirect()->route('eventos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Evento::destroy($id);
        return redirect()->route('eventos');
    }
}
