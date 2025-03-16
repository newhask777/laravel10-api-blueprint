<?php

namespace App\Modules\Admin\Role\Requsts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RoleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'alias' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return Auth::user()->canDo(['super_admin', 'rolles_access']);
    }
}
