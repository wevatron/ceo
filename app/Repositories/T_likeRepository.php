<?php

namespace App\Repositories;

use App\Models\T_like;
use App\Repositories\BaseRepository;

/**
 * Class T_likeRepository
 * @package App\Repositories
 * @version March 6, 2020, 4:50 am UTC
*/

class T_likeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        't_evento_id',
        'usuario_id',
        'dislike'
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
        return T_like::class;
    }
}
