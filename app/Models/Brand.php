<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 *
 * @property $id
 * @property $nomb_marca
 * @property $pais_origen
 * @property $desc_marca
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Brand extends Model
{
    
    static $rules = [
		'nomb_marca' => 'required',
		'pais_origen' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomb_marca','pais_origen','desc_marca','estado'];



}
