<?php

namespace App\Repositories;

use App\Models\C_categoria;
use App\Repositories\BaseRepository;

/**
 * Class C_categoriaRepository
 * @package App\Repositories
 * @version August 1, 2020, 1:13 am UTC
*/

class C_categoriaRepository extends BaseRepository
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
        return C_categoria::class;
    }
}
