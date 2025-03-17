<?php

namespace App\Modules\Admin\User\Requests;

use App\Services\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRequest extends ApiRequest
{
    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        $validator->sometimes('password',['required','confirmed'],function ($input) {

            if(!empty($input->password) || (empty($input->password) && ($this->route()->getName() != 'api.users.update'))) {
                return true;
            }
            return false;
        });

        return $validator;
    }


    public function rules(): array
    {
        return [
            'firstname' => 'required|string|between:2,100',
            'lastname' => 'required|string|between:2,100',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'role_id' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return Auth::user()->canDo(['super_admin', 'user_access']);
    }
}
