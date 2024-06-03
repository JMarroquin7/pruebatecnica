<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecnicoController
{
    public function index(){

       $tecnicos = Tecnico::get();

       return view('tecnicos.index', ['tecnicos' => $tecnicos]);
    }

    public function show(Tecnico $tecnico)
    {
        return view('tecnicos.show', ['tecnico' => $tecnico]);
    }

    public function create(){
        return view('tecnicos.create', ['tecnico' => new Tecnico]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'nombre' => ['required','max:200', 'regex:/^[\pL\s\-]+$/u'],
            'telefono' => ['required','digits:8'],
            'email' => ['required','email']
        ]);

        $tecnico = new Tecnico;
        $tecnico->nombre = $request->input('nombre');
        $tecnico->telefono = $request->input('telefono');
        $tecnico->email = $request->input('email');
        $tecnico->save();

        session()->flash('status', 'tecnico registrado');

        return redirect()->route('tecnicos.index');
    }

    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.edit', ['tecnico' =>$tecnico]);
    }


    public function update( Request $request, Tecnico $tecnico)
    {
        $request ->validate([
            'nombre' => ['required', 'max:200', 'regex:/^[\pL\s\-]+$/u'],
            'telefono' => ['required', 'digits:8'],
            'email' => ['required','email']
        ]);

        $tecnico->nombre = $request->input('nombre');
        $tecnico->telefono = $request->input('telefono');
        $tecnico->email = $request->input('email');
        $tecnico->save();

        session()->flash('status', 'Datos del tecnico actualizados');

        return redirect()->route('tecnicos.show', $tecnico);
    }

    public function destroy(Tecnico $tecnico){
        $tecnico->delete();

        return to_route('tecnicos.index')->with('status', 'Datos del tecnico elminados');
    }

}