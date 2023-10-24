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
    
            // Registro exitoso del Padre
            $message = 'Padre creado con éxito';
    
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
            }
    
            // Mensaje final
            $message .= ' y Hijos creados con éxito';
    
            return response()->json(['message' => $message], 201);
        } catch (\Exception $e) {
            \Log::error($e); // Registra el error en el registro de Laravel
    
            return response()->json([
                'error' => 'Hubo un error en el servidor',
                'message' => $e->getMessage(), // Agrega el mensaje de la excepción
                'exception' => get_class($e), // Agrega el tipo de excepción
            ], 500);
        }
    }
    
}
