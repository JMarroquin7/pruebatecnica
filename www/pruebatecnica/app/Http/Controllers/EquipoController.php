<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController
{
    public function index(){

       $equipos = Equipo::get();

       return view('equipos.index', ['equipos' => $equipos]);
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', ['equipo' => $equipo]);
    }

    public function create(){
        return view('equipos.create', ['equipo' => new Equipo]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'tipo' => ['required','max:200'],
            'modelo' => ['required','max:200']
        ]);

        $equipo = new Equipo;
        $equipo->tipo = $request->input('tipo');
        $equipo->modelo = $request->input('modelo');
        $equipo->save();

        session()->flash('status', 'Equipo registrado');

        return redirect()->route('equipos.index');
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', ['equipo' =>$equipo]);
    }


    public function update( Request $request, Equipo $equipo)
    {
        $request ->validate([
            'tipo' => ['required','max:200'],
            'modelo' => ['required','max:200']
        ]);

        $equipo->tipo = $request->input('tipo');
        $equipo->modelo = $request->input('modelo');
        $equipo->save();

        session()->flash('status', 'Datos del equipo actualizados');

        return redirect()->route('equipos.show', $equipo);
    }

    public function destroy(Equipo $equipo){
        $equipo->delete();

        return to_route('equipos.index')->with('status', 'Datos del equipo elminados');
    }

}