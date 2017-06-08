<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\URL;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The constant for the value representation of gender
     */
    const GENDER_UNSPECIFIED = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    const GENDER_TYPE_ARRAY = [
        self::GENDER_UNSPECIFIED => 'Unspecified',
        self::GENDER_MALE => 'Male',
        self::GENDER_FEMALE => 'Female'
    ];

    /**
     * The constant for the value representation of status
     */
    const STATUS_PENDING = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVATED = 2;
    const STATUS_TYPE_ARRAY = [
        self::STATUS_PENDING => 'Pending',
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_DEACTIVATED => 'Deactivated'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'country_id', 'birthday', 'gender', 'bio', 'role_id', 'status', 'activation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns boolean to check if user has set up profile picture
     *
     * @return mixed
     */
    public function hasProfileImage()
    {
        return $this->image_url !== null;
    }

    /**
     * Returns the URL of the profile picture, default if none.
     *
     * @return mixed
     */
    public function getProfileImageUrl()
    {
        if ($this->hasProfileImage()){
            return URL::to($this->image_url);
        }
        return URL::to('/img/profiles/default.png');
    }

    /**
     * Returns the joined month and year from the 'created_at' attribute
     *
     * @return mixed
     */
    public function getJoinedDate()
    {
        return $this->created_at->format('F Y');
    }

    /**
     * Returns the country of the user if set
     *
     * @return mixed
     */
    public function getCountry()
    {
        if($country = $this->country()->first()){
            return $country->name;
        }
        else{
            return '';
        }

    }

    /**
     * Returns the gender of the user
     *
     * @return mixed
     */
    public function getGender()
    {
        return self::GENDER_TYPE_ARRAY[$this->gender];
    }

    /**
     * Returns the formatted birthday of the user
     *
     * @return mixed
     */
    public function getBirthday()
    {
        if($this->birthday === null){
            return '';
        }
        return Carbon::parse($this->birthday)->format('j F Y');
    }

    /**
     * Returns the role of the user
     *
     * @return mixed
     */
    public function getRole()
    {
        if($role = $this->role()->first()){
            return $this->role()->first()->name;
        }
        else{
            return '';
        }
    }

    /**
     * Returns flag that indicates if the user is administrator
     *
     * @return boolean
     */
    public function isAdministrator()
    {
        if($role = $this->role()->first()){
            return $this->role()->first()->id == Role::ROLE_ADMINISTRATOR;
        }
        else{
            return false;
        }
    }

    /**
     * Returns flag that indicates if the user is user
     *
     * @return boolean
     */
    public function isUser()
    {
        if($role = $this->role()->first()){
            return $this->role()->first()->id == Role::ROLE_USER;
        }
        else{
            return false;
        }
    }
    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Many-To-One Relationship Method for accessing the User->country
     *
     * @return QueryBuilder Object
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * Many-To-One Relationship Method for accessing the User->role
     *
     * @return QueryBuilder Object
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /*
    |--------------------------------------------------------------------------
    | Functional Methods
    |--------------------------------------------------------------------------
    */
    // Set the verified status to true and make the email token null
    public function verified()
    {
        $this->status = self::STATUS_ACTIVE;
        $this->activation_code = null;
        $this->save();
    }
}
