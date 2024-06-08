<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'appoiments';

    protected $fillable = [
        'id_usuario',
        'id_servicio',
        'id_vh',
        'fecha_cita',
        'hora_cita',
        'estado_cita',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vh');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_servicio');
    }
}
