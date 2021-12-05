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
        $monthly_link_bonus = Revenue::where('user_id', Auth::user()->id)->get();
        return view('superbuyers.revenue', ['monthly_link_bonus' => $monthly_link_bonus]);
    }
}
