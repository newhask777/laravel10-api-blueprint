<?php

namespace App\Modules\Admin\Sources\Policies;

use App\Modules\Admin\User\Models\User;

class SourcePolicy
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
        return $user->canDo(['super_admin', 'sources_access']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->canDo(['super_admin', 'sources_access']);
    }
}
