<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class T_boleto
 * @package App\Models
 * @version March 10, 2020, 5:34 am UTC
 *
 * @property integer t_evento_id
 * @property integer usuario_id
 * @property number dislike
 */
class T_boleto extends Model
{
    use SoftDeletes;

    public $table = 't_boletos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        't_evento_id',
        'usuario_id',
        'dislike'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        't_evento_id' => 'integer',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        't_evento_id' => 'required',
        'usuario_id' => 'required',
        'dislike' => 'required'
    ];

    public function Eventos()
    {
        return $this->hasOne(T_evento::class,'id','t_evento_id');
    }
}
