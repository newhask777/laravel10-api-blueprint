<?php

namespace App\Modules\Admin\Role\Services;


use App\Modules\Admin\Role\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PermissionService
{
    public function save(Request $request): true
    {
        $data = $request->except('_token');

        $roles = Role::all();

        foreach ($roles as $role)
        {
            if (isset($data[$role->id]))
            {
//                $role->permissions()->attach($data[$role->id]);
                $role->savePermissions($data[$role->id]);
            }
            else
            {
                $role->savePermissions([]);
//                $role->permissions()->attach([]);
            }
        }

        return true;
    }

}
