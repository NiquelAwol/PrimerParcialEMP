<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = \App\Models\Purchase::with('supplier')->orderByDesc('fecha_compra')->get();
        return view('compras.index', compact('compras'));
    }

    public function show(\App\Models\Purchase $compra)
    {
        $compra->load('supplier', 'items.product');
        return view('compras.show', compact('compra'));
    }

    public function destroy(\App\Models\Purchase $compra)
    {
        $compra->delete();
        return redirect()->route('compras.index')->with('success', 'Compra eliminada exitosamente.');
    }
}
