<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appoiment
 *
 * @property $id
 * @property $id_usuario
 * @property $id_servicio
 * @property $id_vh
 * @property $fecha_cita
 * @property $hora_cita
 * @property $id_empleado
 * @property $estado_cita
 * @property $id_prod
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @property Service $service
 * @property User $user
 * @property Vehicle $vehicle
 * @property Worker $worker
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appoiment extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'id_servicio' => 'required',
		'id_vh' => 'required',
		'fecha_cita' => 'required',
		'hora_cita' => 'required',
		'id_empleado' => 'required',
		'estado_cita' => 'required',
		'id_prod' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_servicio','id_vh','fecha_cita','hora_cita','id_empleado','estado_cita','id_prod'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_prod');
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
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehicle()
    {
        return $this->hasOne('App\Models\Vehicle', 'id', 'id_vh');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function worker()
    {
        return $this->hasOne('App\Models\Worker', 'id', 'id_empleado');
    }
    

}
