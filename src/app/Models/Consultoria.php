<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'hora_inicio',
        'hora_fin',
        'codigo_emprendedor',
        'codigo_mentor'
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'hora_inicio' => 'datetime',
        'hora_fin' => 'datetime',
    ];

    public function emprendedor() {
        return $this->belongsTo('App\Model\Emprendedor', 'codigo_emprendedor');
    }

    public function mentor() {
        return $this->belongsTo('App\Model\Mentor', 'codigo_mentor');
    }

}
