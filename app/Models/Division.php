<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Division
 * @package App\Models
 * @version May 3, 2019, 1:52 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection subdivisions
 * @property string name
 */
class Division extends Model
{

    public $table = 'divisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;



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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function subdivisions()
    {
        return $this->hasMany(Subdivision::class);
    }
}
