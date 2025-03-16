<?php

namespace App\Modules\Admin\Role\Models;

use App\Modules\Admin\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'alias'
    ];


    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }


    public function savePermissions($permissions)
    {
//        dd($permissions);
        if (!empty($permissions))
        {
            return $this->permissions()->sync($permissions);

        }
        else
        {
            return $this->permissions()->detach();
        }
    }

    public function hasPermission($alias, $require=false): bool
    {
        if (is_array($alias))
        {
            foreach ($alias as $permissionAlias)
            {
                $hasPermissions = $this->hasPermission($permissionAlias, $require);
                if ($hasPermissions && !$require)
                {
                    return true;
                }
                else if (!$hasPermissions && $require)
                {
                    return false;
                }
            }
        }
        else
        {
            foreach ($this->permissions as $permission)
            {
                if ($permission->alias == $alias)
                {
                    return true;
                }
            }

        }

        return $require;
    }
}
