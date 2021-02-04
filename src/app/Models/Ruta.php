<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

    public const CREATED_AT = 'fecha_asignacion';

    protected $fillable = [
        'fecha_asignacion',
    ];

    protected $casts = ['fecha_asignacion' => 'datetime'];
}
