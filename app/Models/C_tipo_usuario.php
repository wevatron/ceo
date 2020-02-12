<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_tipo_usuario
 * @package App\Models
 * @version February 5, 2020, 11:35 pm UTC
 *
 * @property string valor
 * @property string descripcion
 */
class C_tipo_usuario extends Model
{
    use SoftDeletes;

    public $table = 'c_tipo_usuarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'valor',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'valor' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'valor' => 'required',
        'descripcion' => 'required'
    ];

    
}
