<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'eventoId',
        'numEntradas',
        'estado',
    ];

    public function asistente() {
        return $this->belongsTo(User::class);
    }

    public function evento() {
        return $this->belongsTo(Evento::class);
    }
}
