<?php

namespace App\Repositories;

use App\Models\T_imagenes;
use App\Repositories\BaseRepository;

/**
 * Class T_imagenesRepository
 * @package App\Repositories
 * @version March 5, 2020, 4:26 pm UTC
*/

class T_imagenesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        't_evento_id'
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
        return T_imagenes::class;
    }
}
