<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_aprende
 * @package App\Models
 * @version August 2, 2020, 12:48 pm UTC
 *
 * @property string nombre
 * @property string descripcion
 * @property string video
 * @property string facebook
 * @property string instagram
 * @property string youtube
 * @property string twitter
 * @property string web
 * @property integer c_categorias_id
 */
class T_aprende extends Model
{
    use SoftDeletes;

    public $table = 't_aprendes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'video',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'web',
        'c_categorias_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'video' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'youtube' => 'string',
        'twitter' => 'string',
        'web' => 'string',
        'c_categorias_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|max:253',
        'descripcion' => 'required|max:253',
        'video' => 'max:253',
        'facebook' => 'max:253',
        'instagram' => 'max:253',
        'youtube' => 'max:253',
        'twitter' => 'max:253',
        'web' => 'max:253',
        'c_categorias_id' => 'required'
    ];

    public function Categoria()
    {
       return $this->hasOne('App\Models\C_categoria_aprende','id','c_categorias_id');
    }
}
