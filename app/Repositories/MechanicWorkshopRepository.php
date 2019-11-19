<?php

namespace App\Repositories;

use App\Models\MechanicWorkshop;
use App\Repositories\BaseRepository;

/**
 * Class MechanicWorkshopRepository
 * @package App\Repositories
 * @version November 19, 2019, 9:38 am UTC
*/

class MechanicWorkshopRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'quarter_id'
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
        return MechanicWorkshop::class;
    }
}
