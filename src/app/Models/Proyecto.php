<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'problema',
        'cliente',
        'id_tipo_emprendimiento',
        'id_sector_economico',
    ];

    public function tipo_emprendimiento(){
        return $this->belongsTo('App\Models\TipoEmprendimiento', 'id_tipo_empendimiento');
    }

    public  function sector_economico(){
        return $this->belongsTo('App\Models\SectorEconomico', 'id_sector_economico');
    }

}
