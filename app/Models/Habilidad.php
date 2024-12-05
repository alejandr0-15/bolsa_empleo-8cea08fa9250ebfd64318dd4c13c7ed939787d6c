<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    // Definir la tabla asociada (en caso de que no siga la convención de Laravel)
    protected $table = 'habilidades';

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'idcurriculo',  // Campo para relacionar con la tabla 'curriculums'
        'habilidades',  // Las habilidades que se van a guardar
    ];

    // Definir la relación con el modelo Curriculum
    public function curriculo()
    {
        return $this->belongsTo(Curriculum::class, 'idcurriculo', 'id');
    }
}
