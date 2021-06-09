<?php

namespace App\Http\Controllers\API;

class ResponseFormatter
{
   protected static $response = [];

   public static function success($data = null, $message = null)
   {
      self::$response = $data;

      return response()->json(self::$response);
   }

   public static function error($data = null, $message = null, $code = 400)
   {
      self::$response = $data;

      return response()->json(self::$response);
   }
}
