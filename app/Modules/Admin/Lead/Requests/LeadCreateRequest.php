<?php

namespace App\Modules\Admin\Lead\Requests;

use App\Services\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LeadCreateRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'link' => 'required_without:phone',
            'phone' => 'required_without:link',
            'source_id' => 'required',
            'unit_id' => 'required',
            'user_id' => 'nullable',
            'is_processed' => 'required',

        ];
    }
}
