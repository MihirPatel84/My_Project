<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function successResponse($flag = true, $data = [], $message = "", $statusCode = 200)
    {
        $result = [
            "flag" => $flag,
            "data" => $data,
            "message" => $message,
            "status_code" => $statusCode,
        ];
        return response()->json($result, $statusCode);
    }
    public function errorResponse($flag = true, $data = [], $message = "", $statusCode = 400)
    {
        $result = [
            "flag" => $flag,
            "data" => $data,
            "message" => $message,
            "status_code" => $statusCode,
        ];
        return response()->json($result, $statusCode);
    }
}
