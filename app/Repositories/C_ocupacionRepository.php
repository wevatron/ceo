<?php

namespace App\Repositories;

use App\Models\C_ocupacion;
use App\Repositories\BaseRepository;

/**
 * Class C_ocupacionRepository
 * @package App\Repositories
 * @version August 4, 2020, 9:14 pm UTC
*/

class C_ocupacionRepository extends BaseRepository
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
        return C_ocupacion::class;
    }
}
