<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeProduct
 *
 * @property $id
 * @property $nomb_tipo_prod
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeProduct extends Model
{
    
    static $rules = [
		'nomb_tipo_prod' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomb_tipo_prod','descripcion'];



}
