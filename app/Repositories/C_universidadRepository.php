<?php

namespace App\Repositories;

use App\Models\C_universidad;
use App\Repositories\BaseRepository;

/**
 * Class C_universidadRepository
 * @package App\Repositories
 * @version February 5, 2020, 11:36 pm UTC
*/

class C_universidadRepository extends BaseRepository
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
        return C_universidad::class;
    }
}
