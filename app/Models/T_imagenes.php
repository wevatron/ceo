<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_imagenes
 * @package App\Models
 * @version March 5, 2020, 4:26 pm UTC
 *
 * @property string descripcion
 * @property integer t_evento_id
 */
class T_imagenes extends Model
{
    use SoftDeletes;

    public $table = 't_imagenes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'url_img',
        't_evento_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'url_img' => 'string',
        't_evento_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'url_img' => 'required',
        't_evento_id' => 'required'
    ];


    
}
