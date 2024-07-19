<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    public function listar()
    {
        return "Listar desde el controller";
    }

    public function buscar()
    {
        return "Buscar persona desde el controller";
    }

    public function alta()
    {
        return "Crear persona desde el controller";
    }

    public function modificar()
    {
        return "Modificar persona desde el controller";
    }

    public function semiModificar()
    {
        return "Semi modificar persona desde el controller";
    }

    public function baja()
    {
        return "Eliminar persona desde el controller";
    }
}
