<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CompanyAuthController extends Controller
{
    public function loginform()
    {
        return view('auth.company.login');
    }
    public function registerform()
    {
        return view('auth.company.register');
    }
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['role'] = 'company';

        if (Auth::guard('company')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended(route('company.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->onlyInput('email');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'company',
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('company.login', absolute: false));

    }
    public function destroy(Request $request)
    {
        Auth::guard('company')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
