<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    public const CREATED_AT = 'fecha_diagnostico';

    protected $fillable = [
        'como_nos_conocio',
        'validaciones',
        'instrumentos_validacion',
        'metodologia',
        'recomendaciones',
        'codigo_mentor',
        'id_ruta'
    ];

    protected $casts = ['fecha_diagnostico' => 'datetime'];

    public function mentor(){
        return $this->belongsTo('App\Model\Mentor', 'codigo_mentor');
    }

    public function ruta(){
        return $this->hasOne('App\Model\Route', 'id_ruta');
    }


}
