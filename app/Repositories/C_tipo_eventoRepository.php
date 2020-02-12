<?php

namespace App\Repositories;

use App\Models\C_tipo_evento;
use App\Repositories\BaseRepository;

/**
 * Class C_tipo_eventoRepository
 * @package App\Repositories
 * @version February 5, 2020, 11:37 pm UTC
*/

class C_tipo_eventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
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
        return C_tipo_evento::class;
    }
}
