<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class T_bazar extends Model
{
    use SoftDeletes;

    public $table = 't_bazars';
    

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
       return $this->hasOne('App\Models\C_categoria','id','c_categorias_id');
    }

    public function Imagenes()
    {
        return $this->hasMany('App\Models\T_imagen_bazar','t_bazar_id','id');
    }

    
}
