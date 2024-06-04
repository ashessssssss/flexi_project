<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $id_per
 * @property $fecha_registro
 * @property $fecha_salida
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'id_per' => 'required',
		'fecha_registro' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_per','fecha_registro','fecha_salida','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'id_per');
    }
    

}
