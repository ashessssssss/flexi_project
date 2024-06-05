<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'appoiments'; // Asegúrate de que el nombre de la tabla es correcto

    protected $fillable = [
        'id_usuario', 'id_servicio', 'id_vh', 'fecha_cita', 'hora_cita', 'id_empleado', 'estado_cita', 'id_prod'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vh');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_servicio');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_prod');
    }

    public function worker()
    {
        return $this->belongsTo(User::class, 'id_empleado');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
