<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentores';

    protected $fillable = [
        'codigo',
        'horario',
        'id_usuario',
        'id_cargo',
        'id_especialidad'
    ];

    public function usuario(){
        return $this->hasOne('App\Models\Usuario', 'id_usuario');
    }

    public function cargo(){
        return $this->hasOne('App\Models\Cargo', 'id_cargo');
    }

    public function especialidad(){
        return $this->hasOne('App\Models\Especialidad', 'id_especialidad');
    }

}
