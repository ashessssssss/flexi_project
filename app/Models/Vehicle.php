<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 *
 * @property $id
 * @property $id_usuario
 * @property $matricula
 * @property $image
 * @property $id_marca
 * @property $modelo
 * @property $año_salida_vh
 * @property $color_vh
 * @property $kilometraje
 * @property $cilindros
 * @property $id_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Appoiment[] $appoiments
 * @property Brand $brand
 * @property Category $category
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehicle extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'matricula' => 'required',
		'image' => 'required',
		'id_marca' => 'required',
		'modelo' => 'required',
		'año_salida_vh' => 'required',
		'color_vh' => 'required',
		'kilometraje' => 'required',
		'cilindros' => 'required',
		'id_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','matricula','image','id_marca','modelo','año_salida_vh','color_vh','kilometraje','cilindros','id_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appoiments()
    {
        return $this->hasMany('App\Models\Appoiment', 'id_vh', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brand()
    {
        return $this->hasOne('App\Models\Brand', 'id', 'id_marca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    

}
