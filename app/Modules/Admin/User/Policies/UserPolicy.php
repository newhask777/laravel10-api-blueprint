<?php

namespace App\Modules\Admin\User\Policies;

use App\Modules\Admin\User\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->canDo(['super_admin', 'user_access']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->canDo(['super_admin', 'user_access']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function edit(User $user): bool
    {
        return $user->canDo(['super_admin', 'user_access']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->canDo(['super_admin', 'user_access']);    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->canDo(['super_admin', 'user_access']);
    }
}
