<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 * @package App\Models
 * @version March 17, 2020, 6:12 pm UTC
 *
 * @property string descripcion
 * @property string accion
 */
class Estado extends Model
{
    use SoftDeletes;

    public $table = 'estados';
    

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
