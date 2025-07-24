<?php

use Illuminate\Support\Facades\Route;
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
Route::get("formulario_parametrizado/{id}/{nombre}/{apellido?}", [ReporteController::class, "verUsuario"]);       // llamada a controlador con parametro opcional
Route::get();