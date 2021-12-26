<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'company_name' => 'required|string',
            'tag_line' => 'string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'country' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'address_1' => 'required|string',
            'address_2' => 'string',
        ]);

        $user = User::create([
            'company_name' => $fields['company_name'],
            'tag_line' => $fields['tag_line'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'country' => $fields['country'],
            'city' => $fields['city'],
            'state' => $fields['state'],
            'address_1' => $fields['address_1'],
            'address_2' => $fields['address_2'],
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad Credentials'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
