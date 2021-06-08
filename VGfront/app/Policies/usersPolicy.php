<?php

namespace App\Policies;


use App\Models\users;
use Illuminate\Auth\Access\HandlesAuthorization;

class usersPolicy
{
    use HandlesAuthorization;

    public function before(users $user){
        if($user->isAdmin()){
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function view(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function update(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function delete(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function restore(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function forceDelete(User $user, users $users)
    {
        //
    }
}
