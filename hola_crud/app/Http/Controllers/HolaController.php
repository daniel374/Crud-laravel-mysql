<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    //

    public function index() {
        return "Hola CRUD";
    }

    public function show($nombre) {
        $data['nombre'] = $nombre;
        return view('hola', $data);
    }
}
