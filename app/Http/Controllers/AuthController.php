<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::query()->updateOrCreate(
            [
                'email' => $googleUser->email,
            ],
            [
                'google_id' => $googleUser->google_id,
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_token' => $googleUser->google_token,
            ]
        );

        $token = $user->createToken("Access_Token");

        dd("This should be the value you have in the bearer token when accessing the api ", ["token" => $token->plainTextToken]);
    }
}
