<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $nombre_serv
 * @property $id_tipo_serv
 * @property $desc_serv
 * @property $precio_serv
 * @property $tiempo_estimado
 * @property $estado_serv
 * @property $created_at
 * @property $updated_at
 *
 * @property TypeService $typeService
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'nombre_serv' => 'required',
		'id_tipo_serv' => 'required',
		'precio_serv' => 'required',
		'tiempo_estimado' => 'required',
		'estado_serv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_serv','id_tipo_serv','desc_serv','precio_serv','tiempo_estimado','estado_serv'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeService()
    {
        return $this->hasOne('App\Models\TypeService', 'id', 'id_tipo_serv');
    }
    

}
