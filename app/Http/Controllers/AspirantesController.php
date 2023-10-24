<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirantes;
use Illuminate\Support\Facades\Mail;

class AspirantesController extends Controller
{
    
    public function index()
    {
        return view('formulario');
    }

public function store(Request $request)
{
    $request->validate([
        'copiaPasaporte' => 'nullable|file|mimes:pdf,jpg,png',
        'copiaVisa' => 'nullable|file|mimes:pdf,jpg,png',
        'fotoEnBlanco' => 'nullable|file|mimes:pdf,jpg,png',
    ]);
    $numeroAleatorio = mt_rand(1000000000, 9999999999);
    $nuevo='si';
    $aspirante = new Aspirantes();
     $aspirante->familia = $request->familia1;
    $aspirante->mas21 = $request->mas;
    $aspirante->menos21 = $request->menos;
    $aspirante->nombre = $request->nombre;
    $aspirante->apellido1 = $request->apellido1;
    $aspirante->apellido2 = $request->apellido2;
    $aspirante->edad = $request->edad;
    $aspirante->email = $request->email;
    $aspirante->pais = $request->pais;
    $aspirante->telefono = $request->telefono;
    $aspirante->origen = $request->origen;
    $aspirante->num_alien_pregunta = $request->tieneNumeroAlien;
    $aspirante->numero_alien = $request->numeroAlien;
    $aspirante->razon = $request->motivo;
    $aspirante->code=$numeroAleatorio;
    $aspirante->nuevo=$nuevo;
   
    

   // Manejar la copia del pasaporte
   if ($request->hasFile('copiaPasaporte')) {
    $copiaPasaporte = $request->file('copiaPasaporte');
    $copiaPasaporteExtension = $copiaPasaporte->getClientOriginalExtension();
    $aspirante->copia_pasaporte = $copiaPasaporte->storeAs('documents', 'copia_pasaporte_' . $aspirante->id . '_' . uniqid() . '.' . $copiaPasaporteExtension, 'public');
}




    $aspirante->save();

    // Envío del correo
    $asunto = 'Validando Datos';
    $contenido = 'Continuaremos con su proceso, este es su numero de solicitud: '. $numeroAleatorio . '   Ingrese a: www.miigrup.com/code , para continuar con su proceso'  ;
    $this->enviarCorreo($request->email, $asunto, $contenido);


    // Redireccionar o retornar una respuesta como desees
    

    //return response()->json($aspirante);
}

public function enviarCorreo($correoDestinatario, $asunto, $contenido)
{
    Mail::raw($contenido, function ($message) use ($correoDestinatario, $asunto) {
        $message->to($correoDestinatario)->subject($asunto);
    });
    return redirect()->away('https://www.miigrup.com/code');
}
    

}