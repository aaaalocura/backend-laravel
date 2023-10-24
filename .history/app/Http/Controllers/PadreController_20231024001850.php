<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadreController extends Controller
{
    public function crearPadreYHijos(Request $request)
    {
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
                'padre_id' => $padre->id, // Asociar al Padre
            ]);
        }

        return response()->json(['message' => 'Padre y Hijos creados con éxito'], 201);
    }
}
