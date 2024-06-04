<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $nomb_categoria
 * @property $desc_categoria
 * @property $estado_cat
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'nomb_categoria' => 'required',
		'estado_cat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomb_categoria','desc_categoria','estado_cat'];



}
