<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'id_facultad'];

    public function facultad(){
        return $this->belongsTo('App\Models\Facultad', 'id_facultad');
    }
}
