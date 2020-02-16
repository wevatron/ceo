<?php

namespace App\Repositories;

use App\Models\C_estado;
use App\Repositories\BaseRepository;

/**
 * Class C_estadoRepository
 * @package App\Repositories
 * @version February 16, 2020, 4:40 am UTC
*/

class C_estadoRepository extends BaseRepository
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
        return C_estado::class;
    }
}
