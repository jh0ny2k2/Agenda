<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('/dashboard/empresa', ['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/empresa/addEmpresa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->web = $request->web;
        $empresa->email = $request->email;
        $empresa->informacionExtra = $request->extra;
        $empresa->save();

        return redirect()->route('empresas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(Empresa $empresa)
    {
        Empresa::destroy($empresa->id);
        return redirect()->route('empresas');
    }
}
