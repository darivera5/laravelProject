<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administradores';

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo',
        'id_cargo',
        'id_usuario'
    ];

    public function usuario(){
        return $this->hasOne('App\Models\Usuario', 'id_usuario');
    }

    public function cargo(){
        return $this->hasOne('App\Models\Cargo', 'id_cargo');
    }

}
