<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeService
 *
 * @property $id
 * @property $nomb_tipo_serv
 * @property $desc_tipo_serv
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeService extends Model
{
    
    static $rules = [
		'nomb_tipo_serv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomb_tipo_serv','desc_tipo_serv'];



}
