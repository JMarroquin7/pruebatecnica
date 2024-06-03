<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController
{
    public function index(){

       $clientes = Cliente::get();

       return view('clientes.index', ['clientes' => $clientes]);
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', ['cliente' => $cliente]);
    }

    public function create(){
        return view('clientes.create', ['cliente' => new Cliente]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'nombre' => ['required','max:200', 'regex:/^[\pL\s\-]+$/u'],
            'telefono' => ['required','digits:8'],
            'email' => ['required','email']
        ]);

        $cliente = new Cliente;
        $cliente->nombre = $request->input('nombre');
        $cliente->telefono = $request->input('telefono');
        $cliente->email = $request->input('email');
        $cliente->save();

        session()->flash('status', 'Cliente registrado');

        return redirect()->route('clientes.index');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' =>$cliente]);
    }


    public function update( Request $request, Cliente $cliente)
    {
        $request ->validate([
            'nombre' => ['required', 'max:200', 'regex:/^[\pL\s\-]+$/u'],
            'telefono' => ['required', 'digits:8'],
            'email' => ['required','email']
        ]);

        $cliente->nombre = $request->input('nombre');
        $cliente->telefono = $request->input('telefono');
        $cliente->email = $request->input('email');
        $cliente->save();

        session()->flash('status', 'Datos del cliente actualizados');

        return redirect()->route('clientes.show', $cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();

        return to_route('clientes.index')->with('status', 'Datos del cliente elminados');
    }

}