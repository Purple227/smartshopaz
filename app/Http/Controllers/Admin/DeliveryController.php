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

    public function getDeliveryFeeAPIs()
    {
        $delivery = Delivery::first();
        $delivery = $delivery == null ? 0 : $delivery;
        return $delivery;
    }

    public function store(Request $request)
    {
        $check_delivery_table = Delivery::count();
        $delivery = $check_delivery_table == 1 ? Delivery::find(1) : new Delivery;

        if ($request->state != null) {
        $delivery->state = $request->state;
        }

        if ($request->state_price != null) {
        $delivery->state_price = $request->state_price;
        }

        if ($request->weight != null) {
        $delivery->weight = $request->weight;
        }

        if ($request->weight_price != null) {
        $delivery->weight_price = $request->weight_price;
        }
        
        $delivery->save();
        return redirect()->route('admin.delivery.fee');
    }

}
