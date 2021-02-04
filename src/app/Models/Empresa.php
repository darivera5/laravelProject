<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
      'nombre',
      'legalidad',
      'fecha_registro',
        'ventas',
        'codigo_emprendedor'
    ];

    protected $casts  = ['fecha_registro' => 'datetime'];

    public function emprendedor(){
        return $this->belongsTo('App\Models\Emprendedor', 'codigo_emprendedor');
    }
}
