<?php

if (!function_exists('api_response')) {
    function api_response($data,$message,$status)
    {
        return response()->json([
            'message'=> $message,
            'data'=>$data,

        ],$status);
    }
}
