<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Revenue;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Sponsor;

class HomeController extends Controller
{
    public function index() {
        $sum_monthly_link_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_link_bonus')->sum('amount');
        $sum_bi_weekly_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'bi_weekly_bonus')->sum('amount');
        $sum_monthly_fulfilment_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_fulfilment_bonus')->sum('amount');
        $sum_monthly_rank_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_rank_bonus')->sum('amount');
        $sum_monthly_spur_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_spur_bonus')->sum('amount');


        $sum_monthly_link_bonus_monthly_query = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_link_bonus')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $sum_bi_weekly_bonus_monthly_query = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'bi_weekly_bonus')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $sum_monthly_fulfilment_bonus_monthly_query = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_fulfilment_bonus')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $sum_monthly_rank_bonus_monthly_query = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_rank_bonus')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $sum_monthly_spur_bonus_monthly_query = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_spur_bonus')->whereMonth('created_at', Carbon::now()->month)->sum('amount');


        $sponsor = Sponsor::where('user_id', Auth::user()->id)->first();
        $direct_down_line = User::where('sponsor_id', $sponsor->id)->get();

        return view('superbuyers.index', 
        [
        'sum_monthly_link_bonus' => $sum_monthly_link_bonus, 
        'sum_bi_weekly_bonus' => $sum_bi_weekly_bonus, 
        'sum_monthly_fulfilment_bonus' => $sum_monthly_fulfilment_bonus, 
        'sum_monthly_rank_bonus' => $sum_monthly_rank_bonus, 
        'sum_monthly_spur_bonus' => $sum_monthly_spur_bonus, 
        'sum_monthly_link_bonus_monthly_query' => $sum_monthly_link_bonus_monthly_query, 
        'sum_bi_weekly_bonus_monthly_query' => $sum_bi_weekly_bonus_monthly_query,
        'sum_monthly_fulfilment_bonus_monthly_query' => $sum_monthly_fulfilment_bonus_monthly_query,
        'sum_monthly_rank_bonus_monthly_query' => $sum_monthly_rank_bonus_monthly_query,
        'sum_monthly_spur_bonus_monthly_query' => $sum_monthly_spur_bonus_monthly_query,
        'direct_downline' => $direct_down_line
       ]);
    }
}
