<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;


class AuthController extends Controller
{
    //signup
    public function signup(SignUpRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $request->validated();
            $request->password = Hash::make($request->password);
            $user = User::create($request->all());
            // return $user access token
            return response()->json([
                'access_token' => $user->createToken('token')->plainTextToken,
                'token_type' => 'Bearer',
            ]);
        });
    }

    //signin

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SignInRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function signin(SignInRequest $request)
    {
        // $request->validate();
        $user = User::where('email', $request->email)->first();
        return response()->json([
            $request->email
        ]);
        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }
        // return response()->json([
        //     'token' => $user->createToken('token')->plainTextToken,
        // ]);
    }

    //me
    public function me(Request $request)
    {
        return response()->json([
            'me' => $request->user(),
        ]);
    }
}
