<?php

namespace App\Repositories;

use App\Models\T_bazar;
use App\Repositories\BaseRepository;

/**
 * Class T_bazarRepository
 * @package App\Repositories
 * @version August 1, 2020, 1:28 am UTC
*/

class T_bazarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'video',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'web',
        'c_categorias_id'
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
        return T_bazar::class;
    }
}
