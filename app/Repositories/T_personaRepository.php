<?php

namespace App\Repositories;

use App\Models\T_persona;
use App\Repositories\BaseRepository;

/**
 * Class T_personaRepository
 * @package App\Repositories
 * @version February 5, 2020, 3:01 am UTC
*/

class T_personaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'curp',
        'rfc',
        'universidad_id',
        'tipo_usuario_id',
        'municipio_id',
        'giro_negocio_id',
        'evento_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return T_persona::class;
    }
}
