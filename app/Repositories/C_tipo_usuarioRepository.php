<?php

namespace App\Repositories;

use App\Models\C_tipo_usuario;
use App\Repositories\BaseRepository;

/**
 * Class C_tipo_usuarioRepository
 * @package App\Repositories
 * @version February 5, 2020, 11:35 pm UTC
*/

class C_tipo_usuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'valor',
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
        return C_tipo_usuario::class;
    }
}
