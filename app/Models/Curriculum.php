<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    // Definir la tabla asociada a este modelo (en caso de que no sea la convención de Laravel)
    protected $table = 'curriculums';

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'fecha',
        'nombre',
        'objetivo',
        'presentacion',
        'email',
        'telefono',
        'fecha_nacimiento',
        'dui',
        'direccion',
        'usuario_empleado',
    ];

    // Definir la relación con el modelo UsuarioEmpleado
    public function usuarioEmpleado()
    {
        return $this->belongsTo(UsuarioEmpleado::class, 'usuario_empleado');
    }
}
