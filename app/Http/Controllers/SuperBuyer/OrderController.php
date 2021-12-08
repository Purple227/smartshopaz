<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Sponsor;
use App\Models\Revenue;

class OrderController extends Controller
{
    private $direct_downline_array;

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
        for ($i = 0; $i < count($b); $i++) {
            ProductOrder::create([
                'order_id' => $order->id,
                'product_name' => $b[$i]['name'],
                'quantity' => $b[$i]['count'],
                'price' => $b[$i]['price'],
            ]);
        }

        $sponsor = Sponsor::where('user_id', Auth::user()->id)->first();
        $this->getDownlineUser($sponsor->id);
        foreach ($this->direct_downline_array as $value) {
            $sponsor_user = Sponsor::where('user_id', $value)->first();
            $this->getDownlineUser($sponsor_user->id);
        }

        $profit = $request->payment - $request->main_price_sum;
        $profit_percentage = 40 / 100 * $profit;

        $bi_weekly_performance_percentage_shared = 45 / 100 * $profit_percentage;
        $monthly_fulfilment_percantage_shared = 21 / 100 * $profit_percentage;
        $monthly_spur_percantage_shared = 5 / 100 * $profit_percentage;
        $monthly_rank_percantage_shared = 14.4 / 100 * $profit_percentage;
        $CTA = 13.6 / 100 * $profit_percentage;

        $unique_array = array_unique($this->direct_downline_array);

        $array_without_user = array_diff($unique_array, array(Auth::user()->id));

        $count_users = count($array_without_user);

        $bi_weekly_performane_bonus = $bi_weekly_performance_percentage_shared / $count_users;
        $monthly_fulfilment_bonus = $monthly_fulfilment_percantage_shared / $count_users;
        $monthly_spur_bonus = $monthly_spur_percantage_shared / $count_users;
        $monthly_rank_bonus = $monthly_rank_percantage_shared / $count_users;

        foreach ($array_without_user as $value) {
            $revenue = Revenue::create([
                'unique_id' => 'WSB-' . '' . mt_rand(1000, 9999),
                'level' => 'Black Opal',
                'percentage' => 45,
                'amount' => $bi_weekly_performane_bonus,
                'user_id' => $value,
                'transaction_type' => 'bi_weekly_bonus'
            ]);
        }

        foreach ($array_without_user as $value) {
            $revenue = Revenue::create([
                'unique_id' => 'WSB-' . '' . mt_rand(1000, 9999),
                'level' => 'Black Opal',
                'percentage' => 21,
                'amount' => $monthly_fulfilment_bonus,
                'user_id' => $value,
                'transaction_type' => 'monthly_fulfilment_bonus'
            ]);
        }


        foreach ($array_without_user as $value) {
            $revenue = Revenue::create([
                'unique_id' => 'WSB-' . '' . mt_rand(1000, 9999),
                'level' => 'Black Opal',
                'percentage' => 5,
                'amount' => $monthly_spur_bonus,
                'user_id' => $value,
                'transaction_type' => 'monthly_spur_bonus'
            ]);
        }

        foreach ($array_without_user as $value) {
            $revenue = Revenue::create([
                'unique_id' => 'WSB-' . '' . mt_rand(1000, 9999),
                'level' => 'Black Opal',
                'percentage' => 14.4,
                'amount' => $monthly_rank_bonus,
                'user_id' => $value,
                'transaction_type' => 'monthly_rank_bonus'
            ]);
        }

        $save_CTA_revenue = new Revenue;
        $save_CTA_revenue->unique_id = 'WSB-' . '' . mt_rand(1000, 9999);
        $save_CTA_revenue->level = '';
        $save_CTA_revenue->percentage = 13.6;
        $save_CTA_revenue->amount = $CTA;
        $save_CTA_revenue->transaction_type = 'CTA';
        $save_CTA_revenue->save();

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


    public function getDownlineUser($sponsor_id)
    {
        $get_sponsored_user = User::where('sponsor_id', $sponsor_id)->get();
        foreach ($get_sponsored_user as $user) {
            $this->direct_downline_array[] = $user->id;
        }
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
