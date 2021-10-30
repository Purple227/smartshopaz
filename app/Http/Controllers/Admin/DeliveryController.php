<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    
    public function deliveryFeeUI()
    {
        $delivery = Delivery::first();
        return view('admin.delivery-price', ['delivery' => $delivery]);
    }

    public function store(Request $request)
    {
        $check_delivery_table = Delivery::count();
        $delivery = $check_delivery_table == 1 ? new Delivery : Delivery::find(1);
        $delivery->state = $request->state;
        $delivery->price_state = $request->state_price;
        $delivery->weight = $request->weight;
        $delivery->weight_price = $request->weight_price;
        return redirect()->route('admin.delivery.fee');

    }

}
