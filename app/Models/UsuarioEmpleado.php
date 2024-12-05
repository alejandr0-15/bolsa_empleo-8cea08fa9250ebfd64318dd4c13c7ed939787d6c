<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioEmpleado extends Model
{
    use HasFactory;

    // Definir la tabla asociada a este modelo (en caso de que no sea la convención de Laravel)
    protected $table = 'usuario_empleado';

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'genero',
        'departamento',
    ];

    // Definir la relación con otros modelos, si es necesario
}