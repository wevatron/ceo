<?php

namespace App\Repositories;

use App\Models\C_municipio;
use App\Repositories\BaseRepository;

/**
 * Class C_municipioRepository
 * @package App\Repositories
 * @version February 5, 2020, 11:51 pm UTC
*/

class C_municipioRepository extends BaseRepository
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
        return C_municipio::class;
    }
}
