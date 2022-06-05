<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            $user = User::where('email', $request->email);

            if ($user->count() > 0) {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) ){
                    $user = $user->first();
                    return redirect()->route('home');
                } else {
                    return redirect()->back()->withErrors(['message' => 'Password salah']);
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'Email tidak terdaftar']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->merge(['name' => $request->firstname .' '. $request->lastname, 'password' => Hash::make($request->password), 'role_id' => 2]);
            User::create($request->only(['name', 'role_id', 'email','password']));

            return redirect()->route('auth');
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
