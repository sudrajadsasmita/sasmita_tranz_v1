<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message, $token = null)
    {

        $response = [
            'success' => true,
            'message' => $message,
            'data'    => $result,
        ];
        if ($token != null) {
            $response['token'] = $token;
        }
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessage = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
