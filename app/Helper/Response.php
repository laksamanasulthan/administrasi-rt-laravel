<?php

namespace App\Helper;

class Response
{
    public static function generate($code, $data = NULL, $message = NULL)
    {
        switch ($code) {
            case 400:
                return response()->json([
                    'status_code' => '400',
                    'message' => 'Bad Request' ?? $message,
                ])->setStatusCode(400);
                break;
            case 404:
                return response()->json([
                    'status_code' => '404',
                    'message' => 'Not Found' ?? $message,
                ])->setStatusCode(404);
                break;
            case  200:
                return response()->json([
                    'status_code' => 200,
                    'data' => $data,
                    'message' => 'OK' ?? $message
                ])->setStatusCode(200);
                break;
            default:
                return response()->json([
                    'status_code' => '500',
                    'message' => 'Internal Server Error' ?? $message,
                ])->setStatusCode(500);
                break;
        }
    }
}
