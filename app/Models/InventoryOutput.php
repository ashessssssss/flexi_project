<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventoryOutput
 *
 * @property $id
 * @property $id_prod
 * @property $fecha_salida
 * @property $cantidad_salida
 * @property $precio_unitario
 * @property $destino
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InventoryOutput extends Model
{
    
    static $rules = [
		'id_prod' => 'required',
		'fecha_salida' => 'required',
		'cantidad_salida' => 'required',
		'precio_unitario' => 'required',
		'destino' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_prod','fecha_salida','cantidad_salida','precio_unitario','destino','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_prod');
    }
    

}
