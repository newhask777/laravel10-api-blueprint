<?php

namespace App\Modules\Admin\User\Models;

use App\Modules\Admin\Lead\Models\Traits\UserLeads;
use App\Modules\Admin\Role\Models\Traits\UserRoles;
//use App\Modules\Admin\Task\Models\Traits\UserTasks;
use App\Modules\Admin\Task\Models\Traits\UserTasksTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Passport\HasApiTokens;

class User extends AuthUser
{
    use HasFactory, HasApiTokens, UserRoles, UserLeads, UserTasksTrait;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'password', 'status'
    ];

    protected $hidden = [
        'password'
    ];

    public function getFullnameAttribute()
    {
        return $this->firstname . '' . $this->lastname;
    }

}
