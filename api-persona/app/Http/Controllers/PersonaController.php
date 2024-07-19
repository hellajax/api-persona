<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function listar()
    {
        return "Listar desde el controller";
    }

    public function listarPersona()
    {
        return "Listar persona desde el controller";
    }

    public function crear()
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

    public function eliminar()
    {
        return "Eliminar persona desde el controller";
    }
}
