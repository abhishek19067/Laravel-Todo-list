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
        $user->password = bcrypt($request->password); 
        $user->save();
        Auth::login($user);
        $request->session()->flash('status', 'Your account has been registered. Please log in.');
    
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

public function showChangeUsernameForm()
    {
        return view('change-username');
    }

    public function changeUsername(Request $request)
    {
        $request->validate([
            'new_username' => 'required|string|max:255|unique:users,name',
        ]);

        $user = Auth::user();
        $user->name = $request->input('new_username');
        $user->save();

        return redirect()->route('change.username')->with('success', 'Username changed successfully.');
    }


    public function showChangePasswordForm()
    {
        return view('change-password');
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->route('change.password')->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route('change.password')->with('success', 'Password changed successfully.');
    }
}

