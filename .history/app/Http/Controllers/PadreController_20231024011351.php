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


            $data = $request->json()->all();

            // Crear el Padre
            $padre = Padre::create([
                'Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'Apellido_2' => $data['Apellido_2'],
                'Telefono' => $data['Telefono'],
                'Direccion' => $data['Direccion'],
            ]);

            if ($padre) {
                $papa = $padre->id;
                $hijosData = $data['Hijos'];
                foreach ($hijosData as $hijoData) {
                    $alumno = Alumno::create([
                        'Nombre' => $hijoData['Nombre'],
                        'Apellido' => $hijoData['Apellido'],
                        'Apellido_2' => $hijoData['Apellido_2'],
                        'Grado' => $hijoData['Grado'],
                        'Escuela' => $hijoData['Escuela'],
                        'Grupo' => $hijoData['Grupo'],
                        'padre_id' => $papa,
                    ]);
                }
                \Log::info($alumno);

                return response()->json(['message' => 'Padre y Hijos creados con éxito'], 201);
            } else {
                return response()->json(['error' => 'Error al crear el Padre'], 500);
            }
        } catch (\Exception $e) {
            \Log::error($e); 

            return response()->json([
                'error' => 'Hubo un error en el servidor',
                'message' => $e->getMessage(),
                'exception' => get_class($e),
            ], 500);
        }
    }

}
