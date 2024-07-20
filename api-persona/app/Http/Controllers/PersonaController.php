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
                'mensaje' => 'No hay personas que mostrar',
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
                'mensaje' => 'Persona no encontrada',
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

    public function modificar(Request $request, $id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $info = [
                'mensaje' => 'Persona no encontrada',
                'status' => 404
            ];
            return response()->json($info, 404);
        }

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();

        $info = [
            'mensaje' => $persona,
            'status' => 201
        ];
        return response()->json($info, 201);
    }

    public function semiModificar(Request $request, $id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $info = [
                'mensaje' => 'Persona no encontrada',
                'status' => 404
            ];
            return response()->json($info, 404);
        }

        if ($request->has('nombre'))
            $persona->nombre = $request->nombre;

        if ($request->has('apellido'))
            $persona->apellido = $request->apellido;

        if ($request->has('telefono'))
            $persona->telefono = $request->telefono;
        
        $persona->save();

        $info = [
            'mensaje' => $persona,
            'status' => 201
        ];
        return response()->json($info, 201);
    }

    public function baja()
    {
        return "Eliminar persona desde el controller";
    }
}
