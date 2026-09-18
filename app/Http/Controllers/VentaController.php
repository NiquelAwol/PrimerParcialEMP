<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = \App\Models\Sale::with('client')->orderByDesc('fecha_venta')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function show(\App\Models\Sale $venta)
    {
        $venta->load('client', 'items.product');
        return view('ventas.show', compact('venta'));
    }

    public function destroy(\App\Models\Sale $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada exitosamente.');
    }
}
