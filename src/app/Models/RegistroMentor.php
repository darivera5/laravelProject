<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroMentor extends Model
{
    use HasFactory;

    protected $table = 'registro_mentores';

    public const CREATED_AT = 'fecha_registro';

    protected $fillable = [
        'fecha_registro',
        'codigo_administrador',
        'codigo_mentor'
    ];

    public function mhasOneentor(){
        return $this->belongsTo('App\Models\Mentor','codigo_mentor');
    }

    public function administrador(){
        return $this->belongsTo('App\Models\Administrador','codigo_administrador');
    }

}
