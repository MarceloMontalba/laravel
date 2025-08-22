<?php

use Illuminate\Support\Facades\Route;

// Direcciones de plantillas
Route::get('/', function () {
    return view('index');
})->name("home");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get("/service", function(){
    return view("service");
})->name("service");

Route::get("/menu", function(){
    return view("menu");
})->name("menu");

Route::get("/reservation", function(){
    return view("reservation");
})->name("reservation");

Route::get("/testimonial", function(){
    return view("testimonial");
})->name("testimonial");

Route::get("/contact", function(){
    return view("contact");
})->name("contact");
