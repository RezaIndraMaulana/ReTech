<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function customer_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|string|max:200|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => 'true',
            'massage' => 'Register Sukses!',
            'data' => $user,
            'role' => 'Customer'
        ]);
    }

    function customer_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|max:200',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'email wajib di isi!!!',
            'password.required' => 'password wajib di isi!!!',
        ]);

        if (
            !Auth::attempt(
                $request->only('email', 'password')
            )
        ) {
            return response()
                ->json([
                    'status' => 'false',
                    'massage' => 'Try to check email and password'
                ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        return response()->json([
            'status' => 'true',
            'message' => 'Login Sukses',
            'data' => $user,
            'role' => 'Customer',
        ]);

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // if (Auth::attempt($infologin)) {
        //     return response()->json([
        //         'message' => 'Register Sukses',
        //         'data' => $user
        //     ]);
        //     exit();
        // } else {
        //     return redirect('')->withErrors('Email atau Password yang dimasukan tidak sesuai')->withInput();
        // }
    }
}
