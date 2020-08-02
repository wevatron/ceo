<?php

namespace App\Repositories;

use App\Models\T_imagen_bazar;
use App\Repositories\BaseRepository;

/**
 * Class T_imagen_bazarRepository
 * @package App\Repositories
 * @version August 1, 2020, 3:01 am UTC
*/

class T_imagen_bazarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        't_bazar_id'
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
        return T_imagen_bazar::class;
    }
}
