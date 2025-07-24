<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function saludo(){
        return "Hola desde el controlador!";
    }

    public function saludo2($nombre){
        return "Hola, $nombre";
    }

    public function saludo3($nombre, $apellido){
        return "Hola sr/a $nombre $apellido :D";
    }
}
