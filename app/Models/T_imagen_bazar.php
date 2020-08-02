<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_imagen_bazar
 * @package App\Models
 * @version August 1, 2020, 3:01 am UTC
 *
 * @property integer t_bazar_id
 */
class T_imagen_bazar extends Model
{
    use SoftDeletes;

    public $table = 't_imagen_bazars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'imagen',
        't_bazar_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'imagen' => 'string',
        't_bazar_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        't_bazar_id' => 'required',
        'imagen' => 'required'
    ];

    
}
