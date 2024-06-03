<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController
{
    public function index(){

       $marcas = Marca::get();

       return view('marcas.index', ['marcas' => $marcas]);
    }

    public function show(Marca $marca)
    {
        return view('marcas.show', ['marca' => $marca]);
    }

    public function create(){
        return view('marcas.create', ['marca' => new Marca]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'nombre' => ['required','max:200'],
            'pais' => ['required','max:200'],
        ]);

        $marca = new Marca;
        $marca->nombre = $request->input('nombre');
        $marca->pais = $request->input('pais');
        $marca->save();

        session()->flash('status', 'marca registrado');

        return redirect()->route('marcas.index');
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit', ['marca' =>$marca]);
    }


    public function update( Request $request, Marca $marca)
    {
        $request ->validate([
            'nombre' => ['required','max:200'],
            'pais' => ['required','max:200'],
        ]);

        $marca->nombre = $request->input('nombre');
        $marca->pais = $request->input('pais');
        $marca->save();

        session()->flash('status', 'Datos del marca actualizados');

        return redirect()->route('marcas.show', $marca);
    }

    public function destroy(Marca $marca){
        $marca->delete();

        return to_route('marcas.index')->with('status', 'Datos del marca elminados');
    }

}