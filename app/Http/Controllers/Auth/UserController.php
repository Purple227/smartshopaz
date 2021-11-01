<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Sponsor;
use App\Models\RONCode;
use App\Models\Profile;


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

    public function superBuyerRegister(Request $request)
    {

        $validated = $request->validate([
            'sponsor_code' => 'required',
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $sponsor_code_used = Sponsor::where('sponsor_code', $request->sponsor_code)->first();
        $sponsor_code_used->sponsor_code_counter = $sponsor_code_used->sponsor_code_counter + 1;
        $sponsor_code_used->save();


        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->policy = 1;
        $user->complete_registration = 1;
        $user->title = $request->title;
        $user->account_type = 'super-buyer';
        $user->sponsor_id = $sponsor_code_used->id;
        $user->save();

        $sponsor = new Sponsor;
        $sponsor->user_id = $user->id;
        $sponsor->sponsor_code = 'SP'.''.mt_rand(100000, 999999);
        $sponsor->save();

        $ron_code = RONCode::where('ron_code', $request->ron_code)->first();
        $ron_code->status = true;
        $ron_code->save();

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
        ]);

        $user = User::find( $request->user_id );
        $user->complete_registration = 1;
        $user->save();

        $request->merge([ 'user_id' => $request->user_id ]);

        $profile = Profile::create($request->all());

        $request->session()->flash('status', 'Task was successful!');
        return 'registration completed succesfully';
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

    public function checkSponsorCode(Request $request)
    {
        $sponsor_code = Sponsor::where('sponsor_code', $request->sponsor_code)->first();

        if ($sponsor_code == null) 
        {
            return response()->json('sponsor code not found', 400);
        }

        if($sponsor_code->sponsor_code_counter == 5)
        {
            return response()->json('sponsor code no longer eligible for use', 400);
        }

        return ['status_message' => 'Sponsor code match succesfully', 'sponsor_detail' => $sponsor_code ];
    }

    public function checkRonCode(Request $request)
    {
        $ron_code = RonCode::where('ron_code', $request->ron_code)->first();

        if ($ron_code == null) 
        {
            return response()->json('ron code not found', 400);
        }

        if ($ron_code->status == true) 
        {
            return response()->json('ron code already used', 400);
        }

        return 'ron code match succesfully';

    }

    public function checkEmail(Request $request)
    {
        $email = User::where('email', $request->email)->first();

        if ($email == null) 
        {
            return 'Email available for used';
        }

        return response()->json('email taken by another user', 400);
    }

    public function checkUsername(Request $request)
    {
        $username = User::where('username', $request->username)->first();

        if ($username == null) 
        {
            return 'Username available for used';
        }

        return response()->json('username taken by another user', 400);
    }

    public function getUser($id)
    {
        $user = User::where('id', $id)->first();
        return $user;
    }


}
