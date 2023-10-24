<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirantes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido1',
        'apellido2',
        'edad',
        'email',
        'pais',
        'telefono',
        'origen',
        'num_alien_pregunta',
        'numero_alien',
        'copia_pasaporte',
        'copia_visa',
        'foto',
        'razon',
        'familia',
        'mas21',
        'menos21',
        'code',
        'nuevo',
    ];
    protected $casts = [
        'copia_pasaporte' => 'array',
        'copia_visa' => 'array',
        'foto' => 'array',
    ];
}
