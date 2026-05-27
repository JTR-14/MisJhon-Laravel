<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto; 
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('/arreglos', [PageController::class, 'arreglos'])->name('arreglos');
Route::get('/juguetes', [PageController::class, 'juguetes'])->name('juguetes');
Route::get('/peluches', [PageController::class, 'peluches'])->name('peluches');
Route::get('/ropa-bebes', [PageController::class, 'ropaBebes'])->name('ropaBebes');
Route::get('/politica-privacidad', [PageController::class, 'politicaPrivacidad'])->name('politicaPrivacidad');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/integrantes', [PageController::class, 'integrantes'])->name('integrantes');
Route::get('/info-arreglos', [PageController::class, 'infoArreglos'])->name('infoArreglos');
Route::get('/info-juguetes', [PageController::class, 'infoJuguetes'])->name('infoJuguetes');
Route::get('/info-peluches', [PageController::class, 'infoPeluches'])->name('infoPeluches');
Route::get('/info-ropa-bebe', [PageController::class, 'infoRopaBebe'])->name('infoRopaBebe');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/compra', [CompraController::class, 'show'])->name('compra');
Route::post('/compra', [CompraController::class, 'store']);

Route::resource('productos', ProductoController::class)->middleware(\App\Http\Middleware\IsAdmin::class);