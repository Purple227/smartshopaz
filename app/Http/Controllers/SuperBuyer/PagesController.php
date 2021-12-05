<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Support;

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


        $notify_info = $request->all();
        $notify_info = (object) $notify_info;
        
        Notification::route('mail',['smartshopers1@gmail.com', 'reachoutnetworking@gmail.com'])
          ->notify(new Support( $notify_info));

        $request->session()->flash('status', 'Support Email Sent Succesfully!');
        return redirect()->back();
    }
}
