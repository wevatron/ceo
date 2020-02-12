<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_horario
 * @package App\Models
 * @version February 1, 2020, 5:30 am UTC
 *
 * @property string descripcion
 * @property string dia
 */
class C_horario extends Model
{
    use SoftDeletes;

    public $table = 'c_horarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'dia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'dia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'dia' => 'required'
    ];

    
}
