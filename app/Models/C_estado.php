<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_estado
 * @package App\Models
 * @version February 16, 2020, 4:40 am UTC
 *
 * @property string descripcion
 * @property string accion
 */
class C_estado extends Model
{
    use SoftDeletes;

    public $table = 'c_estados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'accion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'accion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'accion' => 'required'
    ];

    
}
