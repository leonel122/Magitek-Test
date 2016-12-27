<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_cliente', 'nombre', 'id_usuario','apellidos','direccion','poblacion','codigopostal','telefono','email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
