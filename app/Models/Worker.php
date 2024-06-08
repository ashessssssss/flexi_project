<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 *
 * @property $id
 * @property $id_usuario
 * @property $fecha_ing_emp
 * @property $fecha_sali_emp
 * @property $estado_emp
 * @property $id_puesto
 * @property $sueldo
 * @property $created_at
 * @property $updated_at
 * @property $nombre_emp
 *
 * @property Appoiment[] $appoiments
 * @property Position $position
 * @property Receipt[] $receipts
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Worker extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'fecha_ing_emp' => 'required',
		'estado_emp' => 'required',
		'id_puesto' => 'required',
		'sueldo' => 'required',
		'nombre_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','fecha_ing_emp','fecha_sali_emp','estado_emp','id_puesto','sueldo','nombre_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appoiments()
    {
        return $this->hasMany('App\Models\Appoiment', 'id_empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function position()
    {
        return $this->hasOne('App\Models\Position', 'id', 'id_puesto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receipts()
    {
        return $this->hasMany('App\Models\Receipt', 'id_empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    

}
