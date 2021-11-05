<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterFee;

class RegisterFeeController extends Controller
{
    public function RegisterFeedetailAPIs()
    {
        $data = RegisterFee::first();
        $register_fee = $data == null ? 20000 :  $data->register_fee;
        $register_fee_percentage = $data == null ? 8 : $data->register_fee_percentage;
        return ['register_fee' => $register_fee, 'register_fee_percentage' => $register_fee_percentage];
    }
}
