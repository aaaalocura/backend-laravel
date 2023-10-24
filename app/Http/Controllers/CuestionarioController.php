<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirantes;

class CuestionarioController extends Controller
{
    public function show($aspiranteId)
    {
        $aspirante = Aspirantes::findOrFail($aspiranteId);

        // Mostrar vista del cuestionario con el aspirante
        return view('cuestionario', compact('aspirante'));
    }

    public function evaluate(Request $request, $aspiranteId)
    {
        $aspirante = Aspirantes::findOrFail($aspiranteId);

        // Obtener respuestas del formulario
        $pregunta1 = $request->input('pregunta1');
        $pregunta2 = $request->input('pregunta2');

        // Lógica para evaluar las respuestas del cuestionario y determinar si el aspirante es aceptado o no
        $resultado = '';

        if ($pregunta1 == 'apto' && $pregunta2 == 'apto') {
            $resultado = 'apto';
        } elseif ($pregunta1 == 'no_apto' || $pregunta2 == 'no_apto') {
            $resultado = 'no_apto';
        } else {
            $resultado = 'talvez';
        }

        // Guardar el resultado en la base de datos o en cualquier otro lugar necesario

        // Redirigir al usuario a la página de resultado
       // Redirigir al usuario a la página de resultado
return redirect()->route('resultado',  $aspiranteId);

    }

    public function result()
    {
       
    
        // Mostrar vista de resultado con el aspirante y el resultado
        return view('resultado');
    }
    
}
