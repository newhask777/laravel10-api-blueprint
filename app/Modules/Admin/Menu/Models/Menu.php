<?php

namespace App\Modules\Admin\Menu\Models;

use App\Modules\Admin\Role\Models\Permission;
use App\Modules\Admin\Role\Models\Traits\UserRoles;
use App\Modules\Admin\User\Models\User;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    use UserRoles;

    const MENU_TYPE_FRONT = 'front';
    const MENU_TYPE_ADMIN = 'admin';

    //perms
    public function perms(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_menu');
    }


    public function scopeFrontMenu($query, User $user)
    {
        return $query->where('type', self::MENU_TYPE_FRONT)
            ->whereHas('perms', function($q) use ($user) {
                $arr = collect($user->getMergedPermissions())->map(function($item) {
                    return $item['id'];
                });

                $q->whereIn('id', $arr->toArray());
            });
    }

    public function scopeMenuByType($query, $type)
    {
        return $query->where('type', $type)->orderBy('parent')->orderBy('sort_order');
    }

}
