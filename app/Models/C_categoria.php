<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_categoria
 * @package App\Models
 * @version August 1, 2020, 1:13 am UTC
 *
 * @property string descripcion
 * @property string accion
 */
class C_categoria extends Model
{
    use SoftDeletes;

    public $table = 'c_categorias';
    

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
        'descripcion' => 'required|max:253',
        'accion' => 'required|max:253'
    ];

    public function Bazares()
    {
        return $this->hasMany('App\Models\T_bazar','c_categorias_id','id');
    }
}
