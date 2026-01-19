<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\UserLoginException;
use App\Exceptions\UserRegisterException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        // Validate the incoming request data
        if (!Auth::attempt($request->validated())) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid login credentials',
            ], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('api-login')->plainTextToken;

        return UserResource::make($user)->additional([
            'status' => true,
            'message' => 'User logged in successfully',
            'meta' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
            ],
        ]);
    }

    public function register(RegisterRequest $request)
    {
        // Validate the incoming request data
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
        ]);

        $token = $user->createToken('api-register')->plainTextToken;

        return UserResource::make($user)->additional([
            'status' => true,
            'message' => 'User registered successfully',
            'meta' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
            ],
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
