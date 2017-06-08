<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can view the listing of all users
     *
     * @param User $user
     *
     * @return bool
     */
    public function userSystem(User $user)
    {
        return $user->isAdministrator();
    }
}
