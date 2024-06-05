<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $id_usuario
 * @property $fecha_registro
 * @property $fecha_salida
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Appoiment[] $appoiments
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'fecha_registro' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','fecha_registro','fecha_salida','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appoiments()
    {
        return $this->hasMany('App\Models\Appoiment', 'id_cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    

}
