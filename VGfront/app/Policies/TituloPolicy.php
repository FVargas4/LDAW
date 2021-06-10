<?php

namespace App\Policies;

use App\Models\Titulo;
use App\Models\users;
use Illuminate\Auth\Access\HandlesAuthorization;

class TituloPolicy
{
    use HandlesAuthorization;

  
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function admin(users $user)
    {
        //
        if($user->isAdmin()){
            return true;
        }
        
        return false;
    }


    public function viewAny(users $user)
    {
        //
        if($user->isUser() || ($user->isAdmin())){
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titulo  $titulo
     * @return mixed
     */
    public function view(users $user, Titulo $titulo)
    {
        //
        if($user->isUser() || ($user->isAdmin())){
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(users $user)
    {
        //
        if($user->isUser() || ($user->isAdmin())){
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titulo  $titulo
     * @return mixed
     */
    public function update(users $user)
    {
        //
        if ($user->isAdmin()){
            return true;
        }
        
        return false;

       

        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titulo  $titulo
     * @return mixed
     */
    public function delete(users $user)
    {
        //
        if ($user->isAdmin()){
            return true;
        }
        
        return false;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titulo  $titulo
     * @return mixed
     */
    public function restore(users $user, Titulo $titulo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titulo  $titulo
     * @return mixed
     */
    public function forceDelete(users $user, Titulo $titulo)
    {
        //
    }
}
