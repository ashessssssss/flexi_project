<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario', 'matricula', 'id_marca', 'modelo', 'año_salida_vh',
        'color_vh', 'kilometraje', 'cilindros', 'id_categoria', 'image',
    ];
}
