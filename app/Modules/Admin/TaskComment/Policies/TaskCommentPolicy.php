<?php

namespace App\Modules\Admin\TaskComment\Policies;

use App\Modules\Admin\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskCommentPolicy
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
     * @param User $user
     * @return bool
     */
    public function view(User $user)
    {
        return $user->canDo(['super_admin','tasks_comment_view']);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function save(User $user)
    {
        return $user->canDo(['super_admin','tasks_comment_create']);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function edit(User $user)
    {
        return $user->canDo(['super_admin','tasks_comment_edit']);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        return $user->canDo(['super_admin','tasks_comment_edit']);
    }
}
