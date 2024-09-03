<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        if ($user->is_admin == 1) {
            return redirect()->route('admin-dashboard')->with('success', 'Signed in');
        } else {
            return redirect()->route('user-dashboard')->with('success', 'Signed in');
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Find the user by email
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Password matches, log the user in
            Auth::login($user);
            if ($user->is_admin == 1) {
                return redirect()->route('admin-dashboard')->with('success', 'Signed in');
            } else {
                return redirect()->route('user-dashboard')->with('success', 'Signed in');
            }
        }

        return redirect()->back()->with('error', 'Credentials do not match our records');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
