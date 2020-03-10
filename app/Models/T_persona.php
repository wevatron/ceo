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
        'apellido',
        'curp',
        'rfc',
        'apellido_paterno',
        'apellido_materno',
        'universidad_id',
        'tipo_usuario_id',
        'municipio_id',
        'municipio',
        'giro_negocio_id',
        'universidad_id',
        'evento_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'curp' => 'string',
        'rfc' => 'string',
        'universidad_id' => 'integer',
        'tipo_usuario_id' => 'integer',
        'municipio_id' => 'integer',
        'giro_negocio_id' => 'integer',
        'evento_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'universidad_id' => 'required',
        'tipo_usuario_id' => 'required',
        'municipio_id' => 'required',
        'giro_negocio_id' => 'required',
        'evento_id' => 'required'
    ];

    public function Universidad()
    {
        return $this->hasOne(C_universidad::class,'id');
    }
    public function TipoUsuario()
    {
        return $this->hasOne(C_tipo_usuario::class,'id');
    }
    public function Municipio()
    {
        return $this->hasOne(C_municipio::class,'id','municipio_id');
    }
    public function Giro()
    {
        return $this->hasOne(C_giro_negocio::class,'id');
    }
    
}
