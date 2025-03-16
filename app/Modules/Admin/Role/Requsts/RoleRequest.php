<?php

namespace App\Modules\Admin\Role\Requsts;

use Illuminate\Foundation\Http\FormRequest;

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
        return true;
    }
}
