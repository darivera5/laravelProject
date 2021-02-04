<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor extends Model
{
    use HasFactory;

    protected $table = 'emprendedores';

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo',
        'direccion',
        'id_usuario',
        'id_programa',
        'codigo_ciudad',
        'id_proyecto',
        ];

    public function usuario(){
        return $this->hasOne('App\Models\Usuario', 'id_usuario');
    }

    public function programa(){
        return $this->hasOne('App\Models\Programa', 'id_programa');
    }

    public function ciudad(){
        return $this->hasOne('App\Models\Ciudad', 'id_ciudad');
    }

    public function proyecto(){
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto');
    }

    public function ruta(){
        return $this->hasOne('App\Models\Ruta', 'id_ruta');
    }

    public function diagnostico(){
        return $this->hasOne('App\Models\Diagnostico', 'id_diagnostico');
    }

}
