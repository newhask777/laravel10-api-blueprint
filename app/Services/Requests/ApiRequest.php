<?php

namespace App\Services\Requests;

use App\Services\Response\ResponseServise;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;


class ApiRequest extends FormRequest
{

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $exception = $validator->getException();
        $errors = (new $exception($validator))->errors();



        throw new HttpResponseException(
            ResponseServise::sendJsonResponse(
                false,
                JsonResponse::HTTP_FORBIDDEN,
                $errors,
            )
        );
    }

}
