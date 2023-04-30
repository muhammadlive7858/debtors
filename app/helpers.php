<?php

if (!function_exists('api_response')) {
<<<<<<< HEAD
    function api_response($data,$message,$status)
    {
        return response()->json([
            'message'=> $message,
=======
    function api_response($data, $msg ,  $status )
    {
        return response()->json([
            'msg'=> $msg,
>>>>>>> 1c4add2164afcd03dfe09da1665120ac59f8ba9f
            'data'=>$data,

        ],$status);
    }
}
