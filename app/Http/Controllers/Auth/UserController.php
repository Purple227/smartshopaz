<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Sponsor;
use App\Models\RonCode;
use App\Models\Profile;
use App\Models\Revenue;
use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ResetPassword;
use App\Notifications\WelcomeMessage;
use DateTime;
use App\Models\Transaction;

class UserController extends Controller
{

private $direct_downline_array;

    public function registerUI()
    {
            return view('superbuyers.register');
    }

    public function loginUI()
    {
            session()->forget('registration_info');
            return view('superbuyers.login');
    }

    public function superBuyerRegister(Request $request)
    {
        $sponsor_code_used = Sponsor::where('sponsor_code', $request->sponsor_code)->first();
        $sponsor_code_used->sponsor_code_counter = $sponsor_code_used->sponsor_code_counter + 1;
        $sponsor_code_used->save();

        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->LGA = $request->L_G_A;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->policy = 1;
        $user->complete_registration = 1;
        $user->title = $request->title;
        $user->wallet = $request->wallet;
        $user->account_type = 'super-buyer';
        $user->sponsor_id = $sponsor_code_used->id;
        $user->save();

        $sponsor = new Sponsor;
        $sponsor->user_id = $user->id;
        $sponsor->sponsor_code = 'SB'.''.mt_rand(100000, 999999);
        $sponsor->save();

        $update_user = User::find($user->id);
        $update_user->sponsor_code = $sponsor->sponsor_code;
        $update_user->save();

        $ron_code = RonCode::where('ron_code', $request->ron_code)->first();
        $ron_code->status = true;
        $ron_code->save(); 

        $sponsor_user_details = User::find($sponsor_code_used->user_id);
        $request->session()->put('registration_info', $user);
        $request->session()->put('registration_info_password', $request->password);
        $request->session()->put('registration_info_member_id', $sponsor->sponsor_code);
        $request->session()->put('registration_info_sponsor_reference_id', $sponsor_code_used->sponsor_code);
        $request->session()->put('sponsor_details', $sponsor_user_details);
        
 
        $monthly_link_bonus = $request->register_percentage / 100 * $request->wallet;

        $this->userToGetMonthlyLinkBonus($sponsor_code_used->id);

        foreach ($this->direct_downline_array as $value) {
            $sponsor_user = Sponsor::where('user_id', $value)->first();
            $this->userToGetMonthlyLinkBonus($sponsor_user->id);
        }

        $unique_array = array_unique($this->direct_downline_array);
        $array_without_user = array_diff($unique_array, array($user->id));
        $count_users = count($array_without_user);

        $percentage_shared = 15 / 100 * $monthly_link_bonus;
        $share_monthly_link_bonus = $percentage_shared / $count_users;

        foreach ($array_without_user as $value) {
            $revenue = Revenue::create([
                'unique_id' => 'WSB-'.''.mt_rand(1000, 9999),
                'level' => 'Black Opal',
                'percentage' => 15,
                'amount' => $share_monthly_link_bonus,
                'user_id' => $value,
                'transaction_type' => 'monthly_link_bonus'
            ]);
        }
 
          $transaction = new Transaction;
          $transaction->user_id = $user->id;
          $transaction->amount = $request->wallet;
          $transaction->status = 1;
          $transaction->transaction_id = $request->transaction_id;
          $transaction->name = $user->name;
          $transaction->transaction_type = 'Registration Fee';
          $transaction->save();

          Notification::route('mail',$user->email)
          ->notify(new WelcomeMessage( $user ));    

        $request->session()->flash('status', 'Task was successful!');
        return $user;
    }

    public function userToGetMonthlyLinkBonus($sponsor_id)
    {
        $get_sponsored_user = User::where('sponsor_id', $sponsor_id)->get();
        foreach ($get_sponsored_user as $user) {
            $this->direct_downline_array[] = $user->id;
        }
    } 

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->account_type == 'super-buyer') 
            {
            Auth::user()->last_login = new DateTime();
            Auth::user()->save();
            return redirect()->route('super-buyer.home');
            } elseif(Auth::user()->account_type == 'ron') {
            return redirect()->route('list.ron.code');
            } else {
                return redirect()->route('admin.home');
            }
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

    public function checkUserName(Request $request)
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

    public function registerInfo(Request $request)
    {
        if ($request->session()->missing('registration_info')) 
        {
            return redirect()->route('super-buyer.home');
        }
        return view('superbuyers.success');
    }

    public function updatePasswordUI()
    {
        return view('superbuyers.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->back();
    }

    public function forgetPasswordUI()
    {
        return view('superbuyers.forgot-password');
    }

    public function sendResetPassword(Request $request)
    {
        $new_generated_password = mt_rand(100000, 999999);
        $user = User::where('username',$request->username)->first();
        $user->password = Hash::make($new_generated_password);
        $user->save();
        
        Notification::route('mail',$user->email)
        ->notify(new ResetPassword( $new_generated_password, $user ));

        return 'Password update succesfull';

    }

    public function userProfile()
    {
        return view('superbuyers.my-account');
    }

}
