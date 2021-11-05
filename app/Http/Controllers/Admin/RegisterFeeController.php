<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterFee;

class RegisterFeeController extends Controller
{
    public function index()
    {
        $register_fee = RegisterFee::first();
        return view('admin.register-fee', ['register_fee' => $register_fee]);
    }

    public function store(Request $request)
    {
        $check_register_fee_table = RegisterFee::count();
        $register_fee = $check_delivery_table == 1 ? Delivery::find(1) : new Delivery;

        if ($request->register_fee != null) {
        $register_fee->register_fee = $request->register_fee;
        }

        if ($request->register_fee_percentage != null) {
        $delivery->register_fee_percentage = $request->register_fee_percentage;
        }
        
        $delivery->save();
        return redirect()->route('admin.delivery.fee');

    }

}
