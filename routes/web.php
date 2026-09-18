<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CompraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', function () {
    $totalProducts = \App\Models\Product::count();
    $totalClients = \App\Models\Client::count();
    $todaySales = \App\Models\Sale::whereDate('fecha_venta', \Carbon\Carbon::today())->sum('total');
    $lowStock = \App\Models\Product::where('stock', '<', 10)->count();

    return view('dashboard', compact('totalProducts', 'totalClients', 'todaySales', 'lowStock'));
})->middleware(['auth', 'verified'])->name('panel');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Módulos ERP en Español
    Route::resource('productos', ProductoController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('ventas', VentaController::class);
    Route::resource('compras', CompraController::class);
});

require __DIR__.'/auth.php';
