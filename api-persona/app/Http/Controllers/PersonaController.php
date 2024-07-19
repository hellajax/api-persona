<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    public function listar()
    {
        $personas = Persona::all();

        if ($personas->isEmpty()){
            $info = [
                'message' => 'No hay personas que mostrar',
                'status' => 200
            ];
            return response()->json($info, 200);
        }

        return response()->json($personas, 200);
    }

    public function buscar($id)
    {
        $persona = Persona::find($id);

        if (!$persona){
            $info = [
                'message' => 'No hay persona que mostrar',
                'status' => 404
            ];
            return response()->json($info, 404);
        }

        $info = [
            'persona' => $persona,
            'status' => 200
        ];

        return response()->json($info, 200);
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
