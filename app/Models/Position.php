<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 *
 * @property $id
 * @property $nomb_puesto
 * @property $desc_puesto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Position extends Model
{
    
    static $rules = [
		'nomb_puesto' => 'required',
		'desc_puesto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomb_puesto','desc_puesto'];



}
