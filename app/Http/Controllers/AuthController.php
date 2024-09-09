<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\session;
use App\Models\User;

class AuthController extends Controller
{
    
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        Auth::login($user);

        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            session()->flash('success', 'Welcome, ' . $user->name);
            return redirect('/home');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
public function logout(Request $request)
{
    Auth::logout();
    session::flush();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}
