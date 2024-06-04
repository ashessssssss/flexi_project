<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appoiment
 *
 * @property $id
 * @property $id_cliente
 * @property $id_servicio
 * @property $fecha_cita
 * @property $hora_cita
 * @property $id_empleado
 * @property $estado_emp
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Service $service
 * @property Worker $worker
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appoiment extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'id_servicio' => 'required',
		'fecha_cita' => 'required',
		'hora_cita' => 'required',
		'id_empleado' => 'required',
		'estado_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_servicio','fecha_cita','hora_cita','id_empleado','estado_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'id_servicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function worker()
    {
        return $this->hasOne('App\Models\Worker', 'id', 'id_empleado');
    }
    

}
