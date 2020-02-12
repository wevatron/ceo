<?php

namespace App\Repositories;

use App\Models\C_giro_negocio;
use App\Repositories\BaseRepository;

/**
 * Class C_giro_negocioRepository
 * @package App\Repositories
 * @version February 5, 2020, 11:30 pm UTC
*/

class C_giro_negocioRepository extends BaseRepository
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
        return C_giro_negocio::class;
    }
}
