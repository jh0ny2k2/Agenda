<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'direccion', 
        'telefono', 
        'email', 
        'web', 
        'informacionExtra',
    ];

    public function experiencias() {
        return $this->hasMany(Experiencia::class);
    }
}
