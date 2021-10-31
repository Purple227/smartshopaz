<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncentiveController extends Controller
{
    public function addIncentiveUI()
    {
        return view('admin.add-incentive');
    }

}
