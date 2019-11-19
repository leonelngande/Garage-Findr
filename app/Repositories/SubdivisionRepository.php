<?php

namespace App\Repositories;

use App\Models\Subdivision;
use App\Repositories\BaseRepository;

/**
 * Class SubdivisionRepository
 * @package App\Repositories
 * @version May 3, 2019, 1:55 pm UTC
*/

class SubdivisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'division_id'
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
        return Subdivision::class;
    }
}
