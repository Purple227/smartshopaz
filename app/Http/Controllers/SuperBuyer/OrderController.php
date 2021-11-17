<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $placed_order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('superbuyers.orders', ['placed_order' => $placed_order]);
    }

    public function placeOrder(Request $request)
    {

        $order_id = mt_rand(100000, 999999);

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->total_price = $request->total_price;
        $order->quantity = $request->quantity;
        $order->account_type = Auth::user()->account_type;
        $order->phone = Auth::user()->phone;
        $order->name = Auth::user()->name;
        $order->payment = $request->payment;
        $order->payment_method = $request->payment_method;
        $order->order_unique_id = $order_id;
        $order->save();

        $b = $request->order_detail;
        for ($i=0; $i < count($b) ; $i++) { 
            ProductOrder::create([
                'order_id' => $order->id,
                'product_name' => $b[$i] ['name'],
                'quantity' => $b[$i] ['count'],
                'price' => $b[$i] ['price'],
            ]);
        }

        $request->session()->flash('status', 'Order Placed Succesfully!');
        return 'Order Placed succesfully';
    }

    public function showOrder($id)
    {
        $placed_order = Order::where('id', $id)->first();
        $order_products = ProductOrder::where('order_id', $id)->get();
        return view('superbuyers.order-process', ['placed_order' => $placed_order, 'order_products' => $order_products]);
    }
}
