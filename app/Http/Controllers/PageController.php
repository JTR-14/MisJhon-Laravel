<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function nosotros()
    {
        return view('pages.nosotros');
    }

    public function arreglos()
    {
        $productos = Producto::where('categoria', 'arreglos')->get();
        return view('pages.arreglos', compact('productos'));
    }

    public function juguetes()
    {
        $productos = Producto::where('categoria', 'juguetes')->get();
        return view('pages.juguetes', compact('productos'));
    }

    public function peluches()
    {
        $productos = Producto::where('categoria', 'peluches')->get();
        return view('pages.peluches', compact('productos'));
    }

    public function ropaBebes()
    {
        $productos = Producto::where('categoria', 'ropa_bebe')->get();
        return view('pages.ropaBebes', compact('productos'));
    }

    public function politicaPrivacidad()
    {
        return view('pages.politicaPrivacidad');
    }

    public function contacto()
    {
        return view('pages.direccionContacto');
    }

    public function infoArreglos()
    {
        return view('pages.infoArreglos');
    }

    public function infoJuguetes()
    {
        return view('pages.infoJuguetes');
    }

    public function infoPeluches()
    {
        return view('pages.infoPeluches');
    }

    public function infoRopaBebe()
    {
        return view('pages.infoRopaBebe');
    }

    public function integrantes()
    {
        return view('pages.integrantes');
    }
}
