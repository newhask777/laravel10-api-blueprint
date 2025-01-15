<?php

namespace App\Services\Response;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;


class ResponseService
{
    private static function responseParams(string|bool $status, array $errors = [], array $data = []): array
    {
        return [
            'status' => $status,
            'errors' => (object) $errors,
            'data' => (object) $data,
        ];
    }

    public static function sendJsonResponse(string|bool $status, int $code = 200, array $errors = [], array $data = []): ResponseFactory|JsonResponse
    {
        return response()->json(
             self::responseParams($status, $errors, $data),
            $code
        );
    }

    public static function success(array $data = []): JsonResponse
    {
        return self::sendJsonResponse(true, 200, [], $data);
    }

    public static function notFound(array $data = []): JsonResponse
    {
        return self::sendJsonResponse(false, 404, [], []);
    }
}
