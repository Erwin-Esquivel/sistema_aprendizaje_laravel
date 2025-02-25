<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    // Nombre de la tabla
    protected $table = 'usuarios';

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Atributos que se pueden asignar en masa
    protected $fillable = [
        'usuario', 'nombre', 'contraseña', 'email', 'rol',
    ];

    // Atributos que deben estar ocultos para los arrays
    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    // Atributos que deben ser convertidos a tipos nativos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Método para encriptar la contraseña antes de guardarla
    public function setContraseñaAttribute($value)
    {
        $this->attributes['contraseña'] = bcrypt($value);
    }
}