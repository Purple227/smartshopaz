<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $monthly_order_sale = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');
        $total_number_of_sale = Order::all()->count();
        $order_total_revenue = Order::all()->sum('total_price');
        $top_five_transaction = Transaction::orderBy('id', 'desc')->paginate(5);
        return view('admin.index', ['monthly_order_sale' => $monthly_order_sale, 'total_number_of_sale' => $total_number_of_sale, 'order_total_revenue' => $order_total_revenue, 'top_five_transaction' => $top_five_transaction  ]);
    }
}
