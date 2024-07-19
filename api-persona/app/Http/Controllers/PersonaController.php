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

    public function alta(Request $request)
    {
        $persona = Persona::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono
        ]);

        if (!$persona) {
            $info = [
                'mensaje' => 'Error al crear la persona',
                'status' => 500
            ];
            return response()->json($info, 500);
        }

        $info = [
            'mensaje' => $persona,
            'status' => 201
        ];

        return response()->json($info, 201);
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
