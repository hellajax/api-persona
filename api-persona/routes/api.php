<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::get('/personas', [PersonaController::class, 'listar']);

Route::get('/personas/{id}', [PersonaController::class, 'listarPersona']);

Route::post('/personas', [PersonaController::class, 'crear']);

Route::put('/personas/{id}', [PersonaController::class, 'modificar']);

Route::patch('/personas/{id}', [PersonaController::class, 'semiModificar']);

Route::delete('/personas/{id}', [PersonaController::class, 'eliminar']);
