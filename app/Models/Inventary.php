<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventary
 *
 * @property $id
 * @property $id_prod
 * @property $fecha_inventario
 * @property $cantidad_existente
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventary extends Model
{
    
    static $rules = [
		'id_prod' => 'required',
		'fecha_inventario' => 'required',
		'cantidad_existente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_prod','fecha_inventario','cantidad_existente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_prod');
    }
    

}
