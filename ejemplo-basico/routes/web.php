<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ReporteController;

// Route::get('/', function () {
//     return "Buenos dias estrellitas, la tierra les dice HOLAAA!!!";
// });

Route::get("/", [HolaController::class, "saludo"]);                            // Prueba con llamado a metodo simple del controlador.
Route::get("/saludo/{nombre}", [HolaController::class, "saludo2"]);            // Prueba con llamado a metodo con parametro del controlador.
Route::get("saludo/{nombre}/{apellido}", [HolaController::class, "saludo3"]);  // Prueba con llamado a controlador con 2 parametros.
Route::get("/reporte",[ReporteController::class, "mostrarGet"]);               // Prueba de entrega de argumentos con querystring (GET).
Route::get("/reporte2/{argumento1}/{argumento2}/{argumento3}", function (...$params){ // Prueba con parametros comprimidos en una lista
    return $params["0"];
});
Route::get("/reporte3/{id}", [ReporteController::class, "mostrarGetCombinado"]);      // Entrega de parametro fijo con querystring
// Se le puede asignar nombre a las rutas
Route::post("/prueba_post", [ReporteController::class, "pruebaPost"])->name("prueba_post");                // Prueba realizada con post para un formulario
Route::get("/formulario", function(){                                                                      // Ruta de prueba para mostrar el template del formulario               
    return view("formulario");
});
Route::match(["get", "post"], "/formulario2", function(){                                                  // Get y Post en una misma ruta
    return view("formulario");
}); 
Route::get("/formulario2", function(){return view("formulario2");});     // Blindeo del formulario de prueba para hacer el put
Route::put("/actualizar_formulario", [ReporteController::class, "actualizarFormulario"])->name("actualizar.todo");  // Prueba de actualización completa con put

Route::get("/formulario3", function(){return view("formulario3");});    // Blindeo del formulario de prueba para hacer el patch
Route::patch("/actualizar_dato", [ReporteController::class, "actualizarDato"])->name("actualizar.dato");            // Actualiza algunos datos de un registro o registros       

Route::get("/formulario4", function(){return view("formulario4");});
Route::delete("/eliminar_dato", [ReporteController::class, "eliminarDato"])->name("eliminar.dato");               // Eliminación del registro 

Route::get("/metodo_protegido",[ReporteController::class, "llamaMetodoProtegido"]);     // Prueba llamando a un metodo publico que llama a uno protegido
Route::get("/metodo_privado",[ReporteController::class, "llamaMetodoPrivado"]);         // Prueba llamando a un metodo publico que llama a uno privado
Route::get("/formulario_parametrizado/{id}/{nombre}/{apellido?}", [ReporteController::class, "verUsuario"]);       // llamada a controlador con parametro opcional
Route::get("/formulario_parametrizado1/{id}/{nombre}", [ReporteController::class, "verUsuario"])->where("id", "[1-3]+"); // Condicional con expresión regular de solo numeros con 1,2 y 3

Route::get("/letras/{nombre}", function($nombre){           // Condicional para solo letras
    return "El nombre es $nombre.";
})->where("nombre","[A-Za-z]+");

Route::get("/numeros_letras/{id}/{nombre}", function($id, $nombre){     // Prueba con multiples condicionales para los parametros
    return "ID: $id<br>Nombre: $nombre.";
})->where(["id"=>"[0-9]+", "nombre"=>"[A-Za-z]+"])->name("numeros.letras");

// Prueba de colección o grupo de rutas
Route::prefix("grupo_prueba")->group(function(){
    Route::get("/linkprueba1", function(){return "<h1>Link de prueba 1</h1>";})->name("grupo_prueba.link1");
    Route::get("/linkprueba2", function(){return "<h1>Link de prueba 2</h1>";})->name("grupo_prueba.link2");
    Route::get("/linkprueba3/{nombre}", function($nombre){return "<h1>Link de prueba 3 con nombre $nombre</h1>";})->name("grupo_prueba.link3");
});

Route::get("/formulario_unificado/{usuario?}", function($usuario='sin_identificar'){
    $animales = ["Gato", "Perro", "Vaca", "Loro", "Hamster"];

    return view("contenido", compact("usuario", "animales"));}
);