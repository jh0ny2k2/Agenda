<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencia = Experiencia::all();
        return view('/dashboard/experiencias', ['experiencias' => $experiencia]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('/dashboard/experiencia/addExperiencia', ['empresas' => $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experiencia = new Experiencia();
        $experiencia->nombre = $request->nombre;
        $experiencia->fechaInicio = $request->inicio;
        $experiencia->fechaTexto = $request->texto;
        $experiencia->descripcionCorta = $request->corta;
        $experiencia->precioPorPersona = $request->precio;
        $experiencia->linkWeb = $request->web;
        $experiencia->descripcionLarga = $request->larga;
        $experiencia->empresaId = $request->empresa;
        $experiencia->save();

        $id = $experiencia->id;
        $request->file('imagen')->storeAs(
            'public',
            'experiencia_' . $id . '.jpg'
        );
        return redirect()->route('experiencias');
    }

    /**
     * METODO PARA VER FORM ASOCIACION DE UNA EMPRESA 
     */
    public function asociacion($id) {
        $evento = Experiencia::where('id', $id)->first();
        return redirect()->route('addAsociacion');
    }

    /**
     * METODO PARA ASOCIAR UNA EMPRESA SI NO ESTA ASOCIADA
     */
    public function addAsociacion($id, Request $request) {
        $evento = Experiencia::where('id', $id)->first();
        $evento->EmpresaId = $request->empresa;
        $evento->save();

        return redirect()->route('addAsociacion');
    }


    /**
     * Display the specified resource.
     */
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Experiencia::destroy($id);
        return redirect()->route('experiencias');
    }
}
