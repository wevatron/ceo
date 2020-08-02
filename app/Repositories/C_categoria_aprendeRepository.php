<?php

namespace App\Repositories;

use App\Models\C_categoria_aprende;
use App\Repositories\BaseRepository;

/**
 * Class C_categoria_aprendeRepository
 * @package App\Repositories
 * @version August 2, 2020, 1:20 pm UTC
*/

class C_categoria_aprendeRepository extends BaseRepository
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
        return C_categoria_aprende::class;
    }
}
