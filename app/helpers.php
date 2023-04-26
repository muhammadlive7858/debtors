<?php

if (!function_exists('api_response')) {
    function api_response($data, $msg ,  $status )
    {
        return response()->json([
            'msg'=> $msg,
            'data'=>$data,

        ],$status);
    }
}
