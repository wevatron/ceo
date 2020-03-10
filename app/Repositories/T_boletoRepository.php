<?php

namespace App\Repositories;

use App\Models\T_boleto;
use App\Repositories\BaseRepository;

/**
 * Class T_boletoRepository
 * @package App\Repositories
 * @version March 10, 2020, 5:34 am UTC
*/

class T_boletoRepository extends BaseRepository
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
        return T_boleto::class;
    }
}
