<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\MessageService;

class MessageController extends Controller {

    private $message_service;

    public function __construct(MessageService $message_service)
    {
        $this->message_service = $message_service;
    }
    public function index()
    {
        return view('message.create');
    }

    public function store(Request $request): JsonResponse
    {
        try {
            $attribute = [
                'content' => $request->message, // クエリパラメータからデータを取得
                'created_at' => now(),
                'updated_at' => now()
            ];
            $this->message_service->create($attribute);
            return $this->sendResponse();
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            return $this->sendErrorResponse($error_message);
        }
    }

    private function sendResponse()
    {
        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'ok'
        ], 200);
    }

    private function sendErrorResponse($error_message)
    {
        return response()->json([
            'success' => false,
            'message' => $error_message
        ], 400);
    }
}
