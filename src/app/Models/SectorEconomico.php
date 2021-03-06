<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorEconomico extends Model
{
    use HasFactory;

    protected $table = 'sectores_economicos';

    protected $fillable = ['nombre'];

}
