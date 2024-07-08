<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblusuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'sexo',
        'marca',
        'compañia',
        'saldo',
        'nivel',
        'activo',
        'email',
        'usuario',
    ];

    public $timestamps = false; // Desactiva las marcas de tiempo automáticas
}
