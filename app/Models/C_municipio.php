<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_municipio
 * @package App\Models
 * @version February 5, 2020, 11:51 pm UTC
 *
 * @property string descripcion
 */
class C_municipio extends Model
{
    use SoftDeletes;

    public $table = 'c_municipios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
