<?php

namespace App\Repositories;

use App\Models\Quarter;
use App\Repositories\BaseRepository;

/**
 * Class QuarterRepository
 * @package App\Repositories
 * @version November 19, 2019, 7:10 am UTC
*/

class QuarterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'subdivision_id'
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
        return Quarter::class;
    }
}
