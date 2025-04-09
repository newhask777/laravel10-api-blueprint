<?php

namespace App\Services\Response;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;


class ResponseServise
{
    private static function responseParams(string|bool $status,  array $data = [], array $errors = []): array
    {
        return [
            'status' => $status,
            'data' => (object) $data,
            'errors' => (object) $errors,
        ];
    }

    public static function sendJsonResponse(string|bool $status, int $code = 200,  array $data = [], array $errors = []): ResponseFactory|JsonResponse
    {
        return response()->json(
             self::responseParams($status, $data, $errors),
            $code
        );
    }

    public static function success(array $data = []): JsonResponse
    {
        return self::sendJsonResponse(true, 200, $data, []);
    }

    public static function notFound(array $data = []): JsonResponse
    {
        return self::sendJsonResponse(false, 404, [], []);
    }

    public static function noAuthorize()
    {
        return self::sendJsonResponse(false, 401, [], []);
    }

}
