<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
        'descripcion',
        'ciudad',
        'direccion',
        'estado',
        'aforoMax',
        'tipo',
        'numMaxEntradasPorPersona',
        'categoriaId',
        'imagen',
        'usuarioId',
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function usuario() {
        return $this->belongsTo(User::class);
    }

    public function inscripciones () {
        return $this->hasMany(Inscripcion::class);
    }
}
