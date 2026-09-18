<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Client::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'empresa' => 'required|string|max:255',
            'nit' => 'required|string|max:50',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:50',
            'ciudad' => 'required|string|max:100',
            'direccion' => 'nullable|string',
        ]);

        $validated['estado'] = 'Activo';

        Client::create($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    public function edit(Client $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Client $cliente)
    {
        $validated = $request->validate([
            'empresa' => 'required|string|max:255',
            'nit' => 'required|string|max:50',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:50',
            'ciudad' => 'required|string|max:100',
            'direccion' => 'nullable|string',
        ]);

        $cliente->update($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Client $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
