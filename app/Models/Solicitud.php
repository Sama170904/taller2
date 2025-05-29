<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;


    protected $table = 'solicitud';

    protected $fillable = [
        'tema',
        'descripcion',
        'area',
        'fecha_registro',
        'fecha_cierre',
        'estado',
        'observacion',
        'usuarioExt',
    ];


    protected $dates = [
        'fecha_registro',
        'fecha_cierre',
    ];


}
