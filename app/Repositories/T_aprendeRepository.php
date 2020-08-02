<?php

namespace App\Repositories;

use App\Models\T_aprende;
use App\Repositories\BaseRepository;

/**
 * Class T_aprendeRepository
 * @package App\Repositories
 * @version August 2, 2020, 12:48 pm UTC
*/

class T_aprendeRepository extends BaseRepository
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
        return T_aprende::class;
    }
}
