<?php

namespace App\Modules\Admin\Sources\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SourcesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return Auth::user()->canDo(['super_admin', 'sources_access']);
    }
}
