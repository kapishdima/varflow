<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendLeedRequest;
use App\Services\API\TelegramService;
use Illuminate\Http\Request;

class LeedController extends Controller
{
    public function __construct(protected TelegramService $telegramService) {}

    public function sendLeed (SendLeedRequest $request) {
        $this->telegramService->sendLeed($request->validated());

        return response()->json(["status" => 200], 201);
    }
}
