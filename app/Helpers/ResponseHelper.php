<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ResponseHelper
{
    public static function respondWithInternalError(string $message): JsonResponse
    {
        return response()->json([
            'message' => $message,
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public static function respondWithNotFound(string $message): JsonResponse
    {
        return response()->json([
            'message' => $message,
        ], Response::HTTP_NOT_FOUND);
    }
}
