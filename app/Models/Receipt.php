<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receipt
 *
 * @property $id
 * @property $id_usuario
 * @property $id_empleado
 * @property $id_cita
 * @property $id_prod
 * @property $fecha_factura
 * @property $hora_factura
 * @property $tipo_pago
 * @property $estado
 * @property $descuento_porcentaje
 * @property $descuento_monto
 * @property $subtotal
 * @property $impuesto
 * @property $total_factura
 * @property $created_at
 * @property $updated_at
 *
 * @property Appoiment $appoiment
 * @property Product $product
 * @property User $user
 * @property Worker $worker
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receipt extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'id_empleado' => 'required',
		'id_cita' => 'required',
		'id_prod' => 'required',
		'fecha_factura' => 'required',
		'hora_factura' => 'required',
		'tipo_pago' => 'required',
		'estado' => 'required',
		'subtotal' => 'required',
		'impuesto' => 'required',
		'total_factura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_empleado','id_cita','id_prod','fecha_factura','hora_factura','tipo_pago','estado','descuento_porcentaje','descuento_monto','subtotal','impuesto','total_factura'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function appoiment()
    {
        return $this->hasOne('App\Models\Appoiment', 'id', 'id_cita');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_prod');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function worker()
    {
        return $this->hasOne('App\Models\Worker', 'id', 'id_empleado');
    }
    

}
