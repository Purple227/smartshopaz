<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    

    public function payment(Request $request)
    {
        $tansaction = Transaction::create($request->all());
        return 'Tansaction Succesfull';
    }

}
