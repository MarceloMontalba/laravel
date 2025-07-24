<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    // Metodo que obtiene parametros por querystring con get
    public function mostrarGet(Request $request){
        // Se obtienen todas las variables recibidas por GET
        $todos = $request->all();

        // Se puede tambien obtener uno a uno los parametros ingresados
        $variable_1 = $request->input("variable_1");
        $variable_2 = $request->input("variable_2");
        $variable_3 = $request->input("variable_3");

        return response()->json($todos);
    }

    public function mostrarGetCombinado(Request $argumentos, $id){
        $variables = $argumentos->all();

        return $variables;
    }

    public function pruebaPost(Request $formulario){
        $nombre = $formulario->input("nombre");
        $edad   = $formulario->input("edad");
        
        return view("resultados", compact("nombre","edad"));
    }

    public function actualizarFormulario(Request $respuesta){
        $datos = $respuesta->all();

        // Se podrian sacar datos concretos
        $nombre = $respuesta->input("nombre");
        $id     = $respuesta->input("id");

        // Aqui se pondria la sentencia para actualizar los datos

        // A modo de prueba se retorna al formulario principal
        return view("formulario");
    }

    public function actualizarDato(Request $actualizar){
        $datos = $actualizar->all();

        // Aqui se pondria la sentencia para actualizar los datos

        // A modo de prueba se retorna al formulario principal
        return view("formulario");
    }

    public function eliminarDato(Request $respuesta){
        $datos = $respuesta->all();

        // Aqui se pondria la sentencia para elimianr los datos

        // A modo de prueba se retorna al formulario principal
        return view("formulario");
    }

    public function llamaMetodoProtegido(){
        return $this->metodoProtegido();
    }

    protected function metodoProtegido(){
        return "Hola todo mundo!";
    }

    public function llamaMetodoPrivado(){
        return $this->metodoPrivado();
    }

    private function metodoPrivado(){
        return "Hola desde el metodo privado.";
    }

    public function verUsuario($id, $nombre, $apellido=''){
        return "N° Usuario: $id<br>Nombre: $nombre $apellido";
    }
}
