<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa1 extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla (si no sigue la convención plural)
    protected $table = 'empresas';

    // Clave primaria
    protected $primaryKey = 'id';

    // Campos asignables masivamente
    protected $fillable = [
        'usuario',
        'contrasena',
        'nombre_empresa',
        'pagina_web',
        'descripcion_empresa',
        'activida_empresa',
        'email',
        'pais',
        'codigo_area'
    ];

    // Si no quieres que el modelo gestione automáticamente las marcas de tiempo 'created_at' y 'updated_at', 
    // puedes deshabilitarlo configurando la propiedad $timestamps a false
    public $timestamps = true;
}
