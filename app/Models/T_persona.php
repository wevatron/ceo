<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_persona
 * @package App\Models
 * @version February 5, 2020, 3:01 am UTC
 *
 * @property string nombre
 * @property string apellido
 * @property string curp
 * @property string rfc
 * @property integer universidad_id
 * @property integer tipo_usuario_id
 * @property integer municipio_id
 * @property integer giro_negocio_id
 * @property integer evento_id
 */
class T_persona extends Model
{
    use SoftDeletes;

    public $table = 't_personas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'curp',
        'rfc',
        'universidad_id',
        'tipo_usuario_id',
        'municipio_id',
        'giro_negocio_id',
        'evento_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'curp' => 'string',
        'rfc' => 'string',
        'universidad_id' => 'integer',
        'tipo_usuario_id' => 'integer',
        'municipio_id' => 'integer',
        'giro_negocio_id' => 'integer',
        'evento_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'universidad_id' => 'required',
        'tipo_usuario_id' => 'required',
        'municipio_id' => 'required',
        'giro_negocio_id' => 'required',
        'evento_id' => 'required'
    ];

    
}
