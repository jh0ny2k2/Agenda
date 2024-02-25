<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'edad',
        'email',
        'telefono',
        'direccion',
        'ciudad',
        'empresaId',
        'password',
        'rol',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function crearEventos()
    {
        return $this->hasMany(Evento::class, 'userId');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresaId');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'inscripcionesId');
    }

    // ROLES

    public function esAsistente()
    {
        return $this->role === 'asistente';
    }

    public function esCreadorEventos()
    {
        return $this->role === 'creadorEventos';
    }

    public function esAdmin()
    {
        return $this->role === 'administrador';
    }
}
