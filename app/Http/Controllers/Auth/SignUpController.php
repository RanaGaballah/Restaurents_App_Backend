<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function signup(RegistrationRequest $request)
    {
        try {


            $user = new User();
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->password = Hash::make($request->password);
            $user->save();
            $token = $user->createToken('user', ['app:all'])->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
            return response()->json([
                'message' => 'Signup successful',
                'user' => $user,
                'token' => $token

            ], 201);
        } catch (AuthenticationException $e) {
            $response = [
                'message' => 'Registeration failed',
                'errors' => $e,
            ];

            return response()->json($response, 401);
        } catch (\Exception $e) {
            $response = [
                'message' => 'Internal Server Error',
                'errors' => 'error : ' . $e,
            ];
            return response()->json($response, 500);
        }
    }
}
