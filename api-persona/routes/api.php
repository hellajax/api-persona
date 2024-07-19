<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/personas', function () {
    return "Listar personas";
});

Route::get('/personas/{id}', function () {
    return "Devolver una persona";
});

Route::post('/personas', function () {
    return "Crear persona";
});

Route::put('/personas/{id}', function () {
    return "Modificar persona";
});

Route::patch('/personas/{id}', function () {
    return "Modificar parcialmente persona";
});

Route::delete('/personas/{id}', function () {
    return "Eliminar persona";
});
