<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{
    Use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'marca',
        'fecha_adquisicion',
        'estado',
    ];
}