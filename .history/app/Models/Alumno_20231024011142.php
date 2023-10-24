<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Apellido_2',
        'Grado',
        'Escuela',
        'Grupo'
        
        'padre_id'
    ];

    public function padre()
    {
        return $this->belongsTo(Padre::class);
    }
}
