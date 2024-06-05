<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;

class AuthController extends BaseAPIController
{
    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return $this->sendError("User not found", 401);
        }

        $token = $request->user()->createToken(config('auth.token_key_auth'))->plainTextToken;
        $user = auth('api')->user();

        $response = [
            'user' => new UserResource($user),
            'token' => $token,
        ];

        return $this->sendResponse($response, "Authorized");
    }

    public function logout()
    {
        try {
            $user = auth()->user();

            if ($user !== null) {
                $user->tokens()->delete();
                return $this->sendSuccess('Successfully');
            }
        } catch (\Exception $error) {
            return $this->sendError($error->getMessage(), 500);
        }
    }

    public function me()
    {
        try {
            $user = auth('api')->user();
            return $this->sendResponse(new UserResource($user), "");
        } catch (\Exception $error) {
            return $this->sendError($error->getMessage(), 500);
        }
    }
}
