<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function support()
    {
        return view('superbuyers.support');
    }

    public function sendSupport(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'member_id' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        

    }
}
