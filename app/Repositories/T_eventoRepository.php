<?php

namespace App\Repositories;

use App\Models\T_evento;
use App\Repositories\BaseRepository;

/**
 * Class T_eventoRepository
 * @package App\Repositories
 * @version February 5, 2020, 1:05 am UTC
*/

class T_eventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_evento',
        'cupo',
        'url_img',
        'tipo_evento_id',
        'taller_id',
        'empresa_id'
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
        return T_evento::class;
    }
}
