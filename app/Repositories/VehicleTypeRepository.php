<?php

namespace App\Repositories;

use App\Models\VehicleType;
use App\Repositories\BaseRepository;

/**
 * Class VehicleTypeRepository
 * @package App\Repositories
 * @version November 19, 2019, 10:04 am UTC
*/

class VehicleTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return VehicleType::class;
    }
}
