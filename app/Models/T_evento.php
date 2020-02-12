<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_evento
 * @package App\Models
 * @version February 5, 2020, 1:05 am UTC
 *
 * @property string nombre_evento
 * @property integer cupo
 * @property string url_img
 * @property integer tipo_evento_id
 * @property integer taller_id
 * @property integer empresa_id
 */
class T_evento extends Model
{
    use SoftDeletes;

    public $table = 't_eventos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_evento',
        'cupo',
        'url_img',
        'tipo_evento_id',
        'taller_id',
        'empresa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_evento' => 'string',
        'cupo' => 'integer',
        'url_img' => 'string',
        'tipo_evento_id' => 'integer',
        'taller_id' => 'integer',
        'empresa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_evento' => 'required',
        'cupo' => 'required',
        'tipo_evento_id' => 'required'
    ];

    public function MunicipoEvento()
    {
        #  
        return $this->hasOne('App\Models\C_tipo_evento','id','tipo_evento_id');
    }
}
