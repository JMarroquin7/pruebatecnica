<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController
{
    public function index(){

       $servicios = Servicio::get();

       return view('servicios.index', ['servicios' => $servicios]);
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', ['servicio' => $servicio]);
    }

    public function create(){
        return view('servicios.create', ['servicio' => new Servicio]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'fecha_ingreso' => ['required','date_format:Y-m-d'],
            'estado' => ['required'],
            'diagnostico' => ['required','max:200'],
            'solucion' => ['required','max:200']
        ]);

        $servicio = new Servicio;
        $servicio->fecha_ingreso = $request->input('fecha_ingreso');
        $servicio->estado = $request->input('estado');
        $servicio->diagnostico = $request->input('diagnostico');
        $servicio->solucion = $request->input('solucion');
        $servicio->save();

        session()->flash('status', 'servicio registrado');

        return redirect()->route('servicios.index');
    }

    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', ['servicio' =>$servicio]);
    }


    public function update( Request $request, Servicio $servicio)
    {
        $request ->validate([
            'fecha_ingreso' => ['required','date_format:Y-m-d'],
            'estado' => ['required'],
            'diagnostico' => ['required','max:200'],
            'solucion' => ['required','max:200']
        ]);

        $servicio->fecha_ingreso = $request->input('fecha_ingreso');
        $servicio->estado = $request->input('estado');
        $servicio->diagnostico = $request->input('diagnostico');
        $servicio->save();

        session()->flash('status', 'Datos del servicio actualizados');

        return redirect()->route('servicios.show', $servicio);
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();

        return to_route('servicios.index')->with('status', 'Datos del servicio elminados');
    }

}