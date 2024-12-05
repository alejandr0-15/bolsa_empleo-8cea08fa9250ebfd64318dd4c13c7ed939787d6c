<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'aplicacion';

    protected $primaryKey = 'id';

    // Campos asignables masivamente
    protected $fillable = [
        'fecha',
        'idempleo',
        'idcurriculum',
        'created_at',
        'updated_at',
    ];

    // Relaciones con otros modelos
    public function empleo()
    {
        return $this->belongsTo(Empleo::class, 'idempleo');
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class, 'idcurriculum');
    }

    public $timestamps = true;
}
