<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

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
        $order->address = $request->address;
        $order->state = $request->state;
        $order->country = Auth::user()->country;
        $order->quantity = $request->quantity;
        $order->account_type = Auth::user()->account_type;
        $order->phone = $request->phone;
        $order->name = $request->name;
        $order->payment = $request->payment;
        $order->order_unique_id = $order_id;
        $order->slug = $order_id;
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

        $transaction = new Transaction;
        $transaction->user_id = $request->user_id;
        $transaction->amount = $request->amount;
        $transaction->status = $request->status;
        $transaction->transaction_id = $request->transaction_id;
        $transaction->name = $request->name;
        $transaction->transaction_type = 'Order Payment';
        $transaction->save();

        $request->session()->flash('status', 'Order Placed Succesfully!');
        return 'Order Placed succesfully';
    }

    public function showOrder($slug)
    {
        $placed_order = Order::where('slug', $slug)->first();
        $order_products = ProductOrder::where('order_id', $placed_order->id)->get();
        return view('superbuyers.order-process', ['placed_order' => $placed_order, 'order_products' => $order_products]);
    }

    public function checkoutUI()
    {
        return view('superbuyers.checkout');
    }
}
