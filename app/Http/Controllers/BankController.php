<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Revenue;

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

        if($request->amount > $request->balance) {
            return back()->withErrors([
                'amount' => 'Insufficient fund',
            ]);  
        }


        // Password will be included soon before hitting the route

        $transaction_id = 'WSB'.''.mt_rand(1000, 9999);

        $request_withdrawal = new Bank;
        $request_withdrawal->amount = $request->amount;
        $request_withdrawal->balance = $request->balance;
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

        $my_request_withdrawal_sum = Bank::where('user_id', Auth::user()->id)->sum('amount');

        $sum_monthly_link_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_link_bonus')->sum('amount');
        $sum_bi_weekly_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'bi_weekly_bonus')->sum('amount');
        $sum_monthly_fulfilment_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_fulfilment_bonus')->sum('amount');
        $sum_monthly_rank_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_rank_bonus')->sum('amount');
        $sum_monthly_spur_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_spur_bonus')->sum('amount');

        return view('superbuyers.bank', 
        [
            'my_request_withdrawal' => $my_request_withdrawal,
            'my_request_withdrawal_sum' => $my_request_withdrawal_sum,
            'sum_monthly_link_bonus' => $sum_monthly_link_bonus, 
            'sum_bi_weekly_bonus' => $sum_bi_weekly_bonus, 
            'sum_monthly_fulfilment_bonus' => $sum_monthly_fulfilment_bonus, 
            'sum_monthly_rank_bonus' => $sum_monthly_rank_bonus, 
            'sum_monthly_spur_bonus' => $sum_monthly_spur_bonus, 
        ]);
    }
}
