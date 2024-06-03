<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\Mime\Exception\InvalidArgumentException;

abstract class BaseAPIController extends Controller
{
    /**
     * @param  JsonResource|array  $data
     */
    final public function makeResponse(string $message, $data): array|JsonResource
    {
        $additionalData = [
            'success' => true,
            'message' => $message,
        ];

        if ($data instanceof JsonResource) {
            $data->with = $additionalData;
        } elseif (is_array($data)) {
            $data = [
                'data' => $data,
            ];

            $data = array_merge($data, $additionalData);
        } else {
            throw new InvalidArgumentException('Invalid argument.');
        }

        return $data;
    }

    /**
     * @param  string  $message
     * @return array
     */
    final public function makeError($message, array $data = [])
    {
        $res = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }

    final public function sendResponse($result, $message): JsonResponse|array|JsonResource
    {
        $response = $this->makeResponse($message, $result);

        return is_array($response) ? Response::json($response) : $this->makeResponse($message, $result);
    }

    final public function sendError($error, int $code = \Illuminate\Http\Response::HTTP_NOT_FOUND): JsonResponse
    {
        return Response::json($this->makeError($error), $code);
    }

    /**
     * @return JsonResponse
     */
    final public function sendSuccess($message, int $code = ResponseAlias::HTTP_OK)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
        ], $code);
    }
}
