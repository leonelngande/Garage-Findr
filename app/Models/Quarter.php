<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Quarter
 * @package App\Models
 * @version November 19, 2019, 7:10 am UTC
 *
 * @property \App\Models\Subdivision subdivision
 * @property \Illuminate\Database\Eloquent\Collection mechanicWorkshops
 * @property string name
 * @property integer subdivision_id
 */
class Quarter extends Model
{
    public $table = 'quarters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'subdivision_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'subdivision_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'subdivision_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function subdivision()
    {
        return $this->belongsTo(\App\Models\Subdivision::class, 'subdivision_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mechanicWorkshops()
    {
        return $this->hasMany(\App\Models\MechanicWorkshop::class, 'quarter_id');
    }
}
