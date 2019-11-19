<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Subdivision
 * @package App\Models
 * @version May 3, 2019, 1:55 pm UTC
 *
 * @property \App\Models\Division division
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection convicts
 * @property string name
 * @property integer division_id
 */
class Subdivision extends Model
{

    public $table = 'subdivisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    public $fillable = [
        'name',
        'division_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'division_id' => 'integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function division()
    {
        return $this->belongsTo(\App\Models\Division::class, 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function convicts()
    {
        return $this->hasMany(\App\Models\Convict::class);
    }
}
