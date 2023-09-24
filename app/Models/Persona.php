<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_persona',
        'apellido_persona',
        'direccion_persona',
        'telefono_persona',
        'email_persona',
        'id_genero',
        'tipo_doc_persona'
    ];
}
