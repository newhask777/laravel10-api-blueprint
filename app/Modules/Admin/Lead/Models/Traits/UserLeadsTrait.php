<?php

namespace App\Modules\Admin\Lead\Models\Traits;

use App\Modules\Admin\Lead\Models\Lead;
use App\Modules\Admin\LeadComment\Models\LeadComment;
use Illuminate\Database\Eloquent\Relations\HasMany;


trait UserLeadsTrait
{
    public function leads(): HasMany
    {
        return $this->hasMany(Lead::class);
    }

    public function tasks()
    {
        return true;
    }

    public function responsibleTask()
    {
        return true;
    }

    public function comments(): HasMany
    {
        return $this->hasMany(LeadComment::class);
    }
}
