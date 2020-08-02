<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_categoria_aprende
 * @package App\Models
 * @version August 2, 2020, 1:20 pm UTC
 *
 * @property string descripcion
 */
class C_categoria_aprende extends Model
{
    use SoftDeletes;

    public $table = 'c_categoria_aprendes';
    

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
    public function Bazares()
    {
        return $this->hasMany('App\Models\T_aprende','c_categorias_id','id');
    }
    
}
