<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padre;
use App\Models\Alumno;
use Illuminate\Support\Facades\Validator;
class PadreController extends Controller
{
    public function crearPadreYHijos(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'Nombre' => 'required|string',
                'Apellido' => 'required|string',
                'Hijos' => 'required|array',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            $data = $request->json()->all();

            // Crear el Padre
            $padre = Padre::create([
                'Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'Apellido_2' => $data['Apellido_2'],
                'Telefono' => $data['Telefono'],
                'Direccion' => $data['Direccion'],
            ]);

            // Crear los Hijos
            $hijosData = $data['Hijos'];
            foreach ($hijosData as $hijoData) {
                Alumno::create([
                    'Nombre' => $hijoData['Nombre'],
                    'Apellido' => $hijoData['Apellido'],
                    'Apellido_2' => $hijoData['Apellido_2'],
                    'Grado' => $hijoData['Grado'],
                    'Escuela' => $hijoData['Escuela'],
                    'Grupo' => $hijoData['Grupo'],
                    'padre_id' => $padre->id,
                ]);
            }

            return response()->json(['message' => 'Padre y Hijos creados con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error en el servidor',$e], 500);
        }
    }
}
