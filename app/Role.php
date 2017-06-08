<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The constant for the value representation of status
     */
    const ROLE_ADMINISTRATOR = 1;
    const ROLE_USER = 2;

    const ROLE_TYPE_ARRAY = [
        self::ROLE_ADMINISTRATOR => 'Administrator',
        self::ROLE_USER => 'User'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

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
     * One-To-Many Relationship Method for accessing the Role->users
     *
     * @return QueryBuilder Object
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
