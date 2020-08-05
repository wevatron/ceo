<?php

namespace App\Repositories;

use App\Models\C_region;
use App\Repositories\BaseRepository;

/**
 * Class C_regionRepository
 * @package App\Repositories
 * @version August 4, 2020, 9:15 pm UTC
*/

class C_regionRepository extends BaseRepository
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
        return C_region::class;
    }
}
