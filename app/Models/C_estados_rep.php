<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class C_estados_rep extends Model
{

    public $table = 'c_estados_reps';
    
    public $timestamps =false;



    public $fillable = [
        'clave',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clave' => 'string',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'clave' => 'required',
        'nombre' => 'required'
    ];

    
}
