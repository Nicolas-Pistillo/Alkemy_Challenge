<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sendResponse($result,$message,$code=200) {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response,$code);
    }

    public function sendError($error, $errorMessage = [], $code = 404) {
        $response = [
            'success' => false,
            'error' => $error,
            'errorMessage' => $errorMessage,
        ];

        return response()->json($response,$code);
    }
}
