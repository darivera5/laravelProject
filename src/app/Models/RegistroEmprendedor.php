<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroEmprendedor extends Model
{
    use HasFactory;

    protected $table = 'registro_emprendedores';

    public const CREATED_AT = 'fecha_registro';

    protected $fillable = [
        'fecha_registro',
        'codigo_administrador',
        'codigo_emprendedor'
    ];

    public function emprendedor(){
        return $this->belongsTo('App\Models\Emprendedor','codigo_emprendedor');
    }

    public function administrador(){
        return $this->belongsTo('App\Models\Administrador','codigo_administrador');
    }
}
