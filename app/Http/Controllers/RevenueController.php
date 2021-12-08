<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Revenue;
use Illuminate\Support\Facades\Auth;

class RevenueController extends Controller
{
    public function revenue()
    {
        $monthly_link_bonus = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_link_bonus')->get();
        $bi_weekly = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'bi_weekly_bonus')->get();
        $monthly_rank = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_rank_bonus')->get();
        $monthly_spur = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_spur_bonus')->get();
        $monthly_fulfilment = Revenue::where('user_id', Auth::user()->id)->where('transaction_type', 'monthly_fulfilment_bonus')->get();
        return view('superbuyers.revenue', 
        [
            'monthly_link_bonus' => $monthly_link_bonus, 
            'bi_weekly' => $bi_weekly, 
            'monthly_rank' => $monthly_rank,
            'monthly_spur' => $monthly_spur,
            'monthly_fulfilment' => $monthly_fulfilment
        ]);
    }
}
