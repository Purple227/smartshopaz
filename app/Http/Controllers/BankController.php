<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function requestWithdrawal(Request $request)
    {
        $request->validate([
            'password' => ['required'],
            'amount' => ['required'],
            'acc_no' => ['required'],
        ]);

        if($request->amount <= 10000) {
            return back()->withErrors([
                'amount' => 'The Amount much be morethan ₦100000.',
            ]);  
        }

        // Password will be included soon before hitting the route

        $transaction_id = 'WSB'.''.mt_rand(1000, 9999);

        $request_withdrawal = new Bank;
        $request_withdrawal->amount = $request->amount;
        $request_withdrawal->acc_no = $request->acc_no;
        $request_withdrawal->user_id = 4;
        $request_withdrawal->transaction_id = $transaction_id;
        $request_withdrawal->save();
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->back();
    }

    public function getrequestWithdrawal()
    {
        $my_request_withdrawal = Bank::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get();
        return view('superbuyers.bank', ['my_withdrawal' => $my_request_withdrawal]);
    }
}
