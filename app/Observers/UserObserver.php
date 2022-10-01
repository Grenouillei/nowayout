<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->roles()->attach(Role::GUEST_ID);
    }
}
