<?php

namespace App\Repositories;

use App\Models\C_estados_rep;
use App\Repositories\BaseRepository;

/**
 * Class C_estados_repRepository
 * @package App\Repositories
 * @version March 10, 2020, 6:08 pm UTC
*/

class C_estados_repRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clave',
        'nombre'
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
        return C_estados_rep::class;
    }
}
