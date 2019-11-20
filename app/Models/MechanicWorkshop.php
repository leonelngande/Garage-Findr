<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class MechanicWorkshop
 * @package App\Models
 * @version November 19, 2019, 9:38 am UTC
 *
 * @property Quarter quarter
 * @property Collection vehicleTypes
 * @property string name
 * @property string address
 * @property integer quarter_id
 */
class MechanicWorkshop extends Model
{
    public $table = 'mechanic_workshops';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'address',
        'quarter_id',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'quarter_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'quarter_id' => 'required',
        'phone' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function quarter()
    {
        return $this->belongsTo(Quarter::class, 'quarter_id');
    }

    /**
     * @return BelongsToMany
     **/
    public function vehicleTypes()
    {
        return $this->belongsToMany(VehicleType::class, 'mechanic_workshop_vehicle_types');
    }
}
