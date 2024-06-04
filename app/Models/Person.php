<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @property $id
 * @property $cedula_per
 * @property $nombre_per
 * @property $apellido_per
 * @property $sexo_per
 * @property $fecha_nac_per
 * @property $telefono_per
 * @property $correo_per
 * @property $estado_per
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    static $rules = [
		'cedula_per' => 'required',
		'nombre_per' => 'required',
		'apellido_per' => 'required',
		'sexo_per' => 'required',
		'telefono_per' => 'required',
		'correo_per' => 'required',
		'estado_per' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula_per','nombre_per','apellido_per','sexo_per','fecha_nac_per','telefono_per','correo_per','estado_per'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
