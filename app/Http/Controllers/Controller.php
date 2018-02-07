<?php

namespace App\Http\Controllers;

use http\Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Log;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseError(Request $request, Exception $e)
   {
       Log::error($e);
       return response()->json([
           'error' => true,
           'code' => $e->getCode(),
           'url' => $request->fullUrl(),
           'message' => $e->getMessage()
       ], $e->getCode());
   }
public function responseSuccess(Request $request, $response)
   {
       return response()->json([
           'error' => false,
           'url' => $request->fullUrl(),
           'response' => $response
       ]);

   }
}



