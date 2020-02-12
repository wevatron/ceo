<?php

namespace App\Repositories;

use App\Models\C_horario;
use App\Repositories\BaseRepository;

/**
 * Class C_horarioRepository
 * @package App\Repositories
 * @version February 1, 2020, 5:30 am UTC
*/

class C_horarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'dia'
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
        return C_horario::class;
    }
}
