<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionMentor extends Model
{
    use HasFactory;

    protected $table = 'asignacion_mentores';

    protected $fillable = [
        'activo',
        'codigo_administrador',
        'codigo_mentor',
        'codigo_emprendedor'
    ];

    public function administrador(){
        return $this->hasOne('App\Models\Administrador', 'codigo_administrador');
    }

    public function mentor(){
        return $this->hasOne('App\Models\Mentor', 'codigo_mentor');
    }

    public function emprendedor(){
        return $this->hasOne('App\Models\Emprendedor', 'codigo_emprendedor');
    }

}
