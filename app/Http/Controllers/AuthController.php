<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login', $data);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            $user = User::where('username', $request->username);

            if ($user->count() > 0) {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password]) ){
                    $user = $user->first();
                    return redirect()->route('home');
                } else {
                    return redirect()->back()->withErrors(['message' => 'test']);
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'test']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'test']);
        }
    }

    public function register()
    {
       $data = [
           'title' => 'Register'
       ];

       return view('login', $data);
    }

    public function store(Request $request)
    {
        try {
            Member::create($request->only(['name', 'phone', 'email','address']));

            return response()([
                'message' => 'success'
            ]);
        } catch(\Exception $e) {
            return response()([
                'message' => 'failed'
            ]);
        }
    }
}
