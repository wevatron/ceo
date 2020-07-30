<?php

namespace App\Models;


use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class T_persona extends Model
{

    public $table = 'users';
    

    protected $dates = ['deleted_at'];
    public $timestamps = false;



    public $fillable = [
        'name',
        'curp',
        'rfc',
        'apellido_paterno',
        'apellido_materno',
        'universidad_id',
        'tipo_usuario_id',
        'municipio_id',
        'estado_id',
        'giro_negocio_id',
        'universidad_id',
        'edad',
        'sexo',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'=>'string',
        'email'=>'string',
        'password'=>'string',
        'apellido_paterno'=>'string',
        'apellido_materno'=>'string',
        'curp'=>'string',
        'rfc'=>'string',
        'municipio_id'=>'int',
        'estado_id'=>'int',
        'universidad_id'=>'integer',
        'tipo_usuario_id'=>'integer',
        'municipio_id'=>'integer',
        'giro_negocio_id'=>'integer',
        'sexo'=>'integer',
        'edad'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'tipo_usuario_id' => 'required',
        'municipio_id' => 'required',
        'estado_id' => 'required',
        'giro_negocio_id' => 'required',
        'apellido_paterno'=>'required',
        'edad'=>'required',
        'sexo'=>'required',
        'apellido_materno'=>'required'
    ];

    public function Universidad()
    {
        return $this->hasOne(C_universidad::class,'id','universidad_id');
    }
    public function TipoUsuario()
    {
        return $this->hasOne(C_tipo_usuario::class,'id','tipo_usuario_id');
    }
    public function Municipio()
    {
        return $this->hasOne(C_municipio::class,'id','municipio_id');
    }
    public function Giro()
    {
        return $this->hasOne(C_giro_negocio::class,'id','giro_negocio_id');
    }
    
}
