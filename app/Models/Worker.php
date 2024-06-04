<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 *
 * @property $id
 * @property $id_per
 * @property $fecha_ing_emp
 * @property $fecha_sali_emp
 * @property $estado_emp
 * @property $id_puesto
 * @property $sueldo
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @property Position $position
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Worker extends Model
{
    
    static $rules = [
		'id_per' => 'required',
		'fecha_ing_emp' => 'required',
		'estado_emp' => 'required',
		'id_puesto' => 'required',
		'sueldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_per','fecha_ing_emp','fecha_sali_emp','estado_emp','id_puesto','sueldo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'id_per');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function position()
    {
        return $this->hasOne('App\Models\Position', 'id', 'id_puesto');
    }
    

}
