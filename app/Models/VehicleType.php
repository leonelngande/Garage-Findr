<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class VehicleType
 * @package App\Models
 * @version November 19, 2019, 10:04 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection mechanicWorkshops
 * @property string name
 */
class VehicleType extends Model
{
    public $table = 'vehicle_types';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function mechanicWorkshops()
    {
        return $this->belongsToMany(\App\Models\MechanicWorkshop::class, 'mechanic_workshop_vehicle_types');
    }
}
