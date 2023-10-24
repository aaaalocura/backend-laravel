<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Apellido_2',
        'Telefono',
        'Direccion',
        'padre_id'
    ];

    public function hijos()
    {
        return $this->hasMany(Alumno::class);
    }
}
