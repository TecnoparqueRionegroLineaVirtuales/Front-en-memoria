<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function inicio(){

        return view('landing.inicio');

    }
    public function murales(){

        return view('landing.index');

    }
    public function ruta(){

        return view('landing.index');

    }
    public function tienda(){

        return view('landing.index');

    }
    public function app(){

        return view('landing.index');

    }
    public function carrito(){

        return view('landing.index');

    }
}
