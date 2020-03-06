<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\C_tipo_evento;
use App\Models\T_imagenes;

class T_evento extends Model
{
    use SoftDeletes;

    public $table = 't_eventos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_evento',
        'descripcion_evento',
        'nombre_conferencista',
        'cargo',
        'empresa',
        'bio',
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
        'descripcion_evento' => 'string',
        'nombre_conferencista' => 'string',
        'cargo' => 'string',
        'empresa' => 'string',
        'bio' => 'string',
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
        'descripcion_evento' => 'required',
        'nombre_conferencista' =>'required',
        'cargo' =>'required',
        'empresa' =>'required',
        'bio' =>'required',
        'cupo' => 'required',
        'tipo_evento_id' => 'required'
    ];

    public function TipoEvento()
    {
        return $this->hasOne(C_tipo_evento::class,'id','tipo_evento_id');
    }

    public function scopeBuscar($query, $nombre_evento)
	{
		return $query->where('nombre_evento','like', "%$nombre_evento%");
    }

    public function Imagenes()
    {
        return $this->hasMany(T_imagenes::class,'t_evento_id','id');
    }
    


}
