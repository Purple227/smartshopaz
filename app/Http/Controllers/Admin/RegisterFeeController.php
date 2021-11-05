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
        $register_fee = $check_register_fee_table == 1 ? RegisterFee::find(1) : new RegisterFee ;

        if ($request->register_fee != null) {
        $register_fee->register_fee = $request->register_fee;
        }

        if ($request->register_fee_percentage != null) {
        $register_fee->register_fee_percentage = $request->register_fee_percentage;
        }
        
        $register_fee->save();
        return redirect()->route('admin.register.fee');

    }

}
