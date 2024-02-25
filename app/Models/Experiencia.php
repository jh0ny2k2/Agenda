<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaInicio',
        'fechaTexto',
        'descripcionCorta',
        'precioPorPersona',
        'linkWeb',
        'descripcionLarga',
        'empresaId',
        'imagen',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
