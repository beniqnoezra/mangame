<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            if (Auth::user()->isAdmin) {
                return redirect()->route('admin.index');
            }

            return redirect()->route('manga');
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('auth.loginPage');
        }
    }

    public function loginPage()
    {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }

    public function registerPage()
    {
        $title = 'Register';
        return view('auth.register', compact('title'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.loginPage');
    }
}
