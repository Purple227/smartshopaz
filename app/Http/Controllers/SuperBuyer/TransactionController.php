<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function revenue()
    {
        return view('superbuyers.revenue');
    }
}
