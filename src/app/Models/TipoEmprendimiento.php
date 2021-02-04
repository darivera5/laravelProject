<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmprendimiento extends Model
{
    use HasFactory;

    protected $table = 'tipo_emprendimientos';

    protected $fillable = ['nombre'];
}
