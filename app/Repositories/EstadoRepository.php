<?php

namespace App\Repositories;

use App\Models\Estado;
use App\Repositories\BaseRepository;

/**
 * Class EstadoRepository
 * @package App\Repositories
 * @version March 17, 2020, 6:12 pm UTC
*/

class EstadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'accion'
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
        return Estado::class;
    }
}
