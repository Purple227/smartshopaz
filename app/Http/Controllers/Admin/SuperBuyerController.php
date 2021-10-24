<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SuperBuyerController extends Controller
{
    public function index()
    {
        $list_super_buyer = User::where('account_type', 'super-buyer')->with('sponsor')->get();
        return view('admin.superbuyers', ['list_super_buyer' => $list_super_buyer]);
    }
}
