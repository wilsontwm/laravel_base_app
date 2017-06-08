<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['country_code', 'name', 'currency'];

    /**
     * Disable auto generated timestamps
     * @var bool
     */
    public $timestamps = false;

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */

    /**
     * One-To-Many Relationship Method for accessing the Country->users
     *
     * @return QueryBuilder Object
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
