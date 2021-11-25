<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GenealogyController extends Controller
{
    public function genealogy($slug)
    {
        return view('superbuyers.genealogy');
    }

    public function directDownline()
    {
        $sponsor = Sponsor::where('user_id', Auth::user()->id)->first();
        $direct_down_line = User::where('sponsor_id', $sponsor->id)->get();
        return view('superbuyers.direct-downline', ['direct_down_line' => $direct_down_line]);
    }

    public function allDownLine()
    {
        $sponsor = Sponsor::where('user_id', Auth::user()->id)->first();
        $direct_down_line = User::where('sponsor_id', $sponsor->id)->get();
        return view('superbuyers.all-downline-details', ['direct_down_line' => $direct_down_line]);
    }

    public function generationView()
    {
        return view('superbuyers.downline');
    }
    
    public function directDownLineAPIs(Request $request)
    {
        $id = $request->id == null ?  Auth::user()->id : $request->id;
        $sponsor = Sponsor::where('user_id', $id)->first();
        $direct_down_line = User::where('sponsor_id', $sponsor->id)->get();
        return $direct_down_line;
    }

}
