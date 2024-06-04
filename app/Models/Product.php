<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $stock
 * @property $precio
 * @property $id_tipo_prod
 * @property $id_proveedor
 * @property $estado_prod
 * @property $created_at
 * @property $updated_at
 *
 * @property Provider $provider
 * @property TypeProduct $typeProduct
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'stock' => 'required',
		'precio' => 'required',
		'id_tipo_prod' => 'required',
		'id_proveedor' => 'required',
		'estado_prod' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','stock','precio','id_tipo_prod','id_proveedor','estado_prod'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provider()
    {
        return $this->hasOne('App\Models\Provider', 'id', 'id_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeProduct()
    {
        return $this->hasOne('App\Models\TypeProduct', 'id', 'id_tipo_prod');
    }
    

}
