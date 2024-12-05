<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla (si no sigue la convención plural)
    protected $table = 'empleos';

    // Definir la clave primaria (por defecto Laravel usa 'id')
    protected $primaryKey = 'id';

    // Especificar si la clave primaria es autoincremental (en este caso lo es, por lo tanto no es necesario declararlo)
    // public $incrementing = true;

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'id_empresa',
        'titulo',
        'descripcion',
        'salario',
        'requisitos'
    ];

    // Definir la relación con el modelo Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa1::class, 'id_empresa');
    }

    // Definir si se gestionan automáticamente las marcas de tiempo 'created_at' y 'updated_at'
    public $timestamps = true; // Por defecto en Laravel esto es true, lo dejo explícito

}
