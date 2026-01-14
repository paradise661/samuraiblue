<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CustomerAuthController extends Controller
{
    public function loginform(){
        return view('auth.customer.login');
    }
    public function registerform(){
        return view('auth.customer.register');
    }
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['role']='customer';

        if (Auth::guard('customer')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended(route('frontend.home'));
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->onlyInput('email');
    }
    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('user.login', absolute: false));

    }
    public function destroy(Request $request){
        Auth::guard('customer')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }

}
