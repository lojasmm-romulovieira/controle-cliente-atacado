<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AuthRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController
{
    public function auth(AuthRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        $user = User::where('email', $credentials['email'])->first();
        $isValidPassword = Hash::check($credentials['password'], $user->password);

        if (!$user || !$isValidPassword) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas estão incorretas.']
            ]);
        }

        $token = $user->createToken($credentials['device_name']);

        return response()->json([
            'token' => $token->plainTextToken
        ]);
    }


    public function logout(): JsonResponse
    {
        if (!$user = auth()->user()) {
            throw ValidationException::withMessages([
                'user' => ['Não existe sessão ativa para este usuário.']
            ]);
        }

        $user->tokens()->delete();

        return response()->json([
            'message' => 'Token revogado com sucesso.'
        ]);
    }
}
