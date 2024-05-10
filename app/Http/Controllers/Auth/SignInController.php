<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{

    public function signin(LoginRequest $request)
    {
        try {

            $email = $request->email;
            $password = $request->password;
            $user = User::where('email', $email)->first();
            if (!$user) {
                $response = [
                    'message' => 'email not found',
                    'errors' => 'email not found'
                ];
                return response()->json($response, 401);
            }
            if ((Hash::check($password, $user->password)) || ($user->password == null)) {
                $user->tokens()->delete();
                $token = $user->createToken(request()->userAgent())->plainTextToken;
                $userData = [
                    'user' => $user,
                    'token' => $token,
                ];
                return response()->json($userData, 200);
            } else {
                $response = [
                    'message' => 'Incorrect Password',
                    'errors' => 'Incorrect Password'
                ];
                return response()->json($response, 401);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => 'Internal Server Error',
                'errors' => 'error : ' . $e,
            ];
            return response()->json($response, 500);
        }
    }
}
