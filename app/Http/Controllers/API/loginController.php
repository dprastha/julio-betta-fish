<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class loginController extends Controller
{
    public function action(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            $currentUser = auth()->user();

            return $currentUser;
        }

        return response()->json([
            'error' => 'Your credential not match'
        ], 401);
    }
}
