<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function registerUI()
    {
        return view('superbuyers.register');
    }

    public function loginUI()
    {
        return view('superbuyers.login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
        'ron_code' => 'required',
        'sponsor_id' => 'required',
        'name' => 'required',
        'email' => ['required', 'unique:users', 'email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create($request->all());

        Auth::login($user);

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('super-buyer.home');
    }

}
