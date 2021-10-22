<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;

class UserController extends Controller
{
    public function registerUI()
    {
        if(Auth::check() && Auth::user()->account_type == 'super-buyer') {
            return redirect()->route('super-buyer.home');
        } else {
            return view('superbuyers.register');
        }
    }

    public function loginUI()
    {
        if(Auth::check() && Auth::user()->account_type == 'super-buyer') {
            return redirect()->route('super-buyer.home');
        } else {
            return view('superbuyers.login');
        }
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'sponsor_id' => 'required',
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $hashed_password = Hash::make($request->password);
        $request->merge([ 'password' => $hashed_password]);

        $user = User::create($request->all());

        Auth::login($user);

        $request->session()->flash('status', 'Task was successful!');
        return $user;
    }

    public function completeRegistration(Request $request)
    {
        $validated = $request->validate([
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'L_G_A' => 'required',
            'state' => 'required',
            'country' => 'required',
            'ron_code' => 'required',
        ]);

        $user = User::find( Auth::user()->id );
        $user->complete_registration = 1;
        $user->save();

        $request->merge([ 'user_id' => Auth::user()->id ]);

        $profile = Profile::create($request->all());

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('super-buyer.home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('super-buyer.home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}