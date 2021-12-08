<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GenealogyController extends Controller
{
    private $direct_downline_array;

    public function genealogy($slug)
    {
        $sponsor = Sponsor::where('user_id', Auth::user()->id)->first();
        $down_line = User::where('sponsor_id', $sponsor->id)->get();
        return view('superbuyers.genealogy', ['down_line' => $down_line]);
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
        $this->getDownlineUser($sponsor->id);

        if($this->direct_downline_array == null) {
            $all_downline= [];
            return view('superbuyers.all-downline-details', ['all_downline' => $all_downline]);
        }
        
        foreach ($this->direct_downline_array as $value) {
            $sponsor_user = Sponsor::where('user_id', $value)->first();
            $this->getDownlineUser($sponsor_user->id);
        }

        $unique_array = array_unique($this->direct_downline_array);
        $array_without_user = array_diff($unique_array, array(Auth::user()->id));
        $users = User::all();
        $all_downline = $users->find($array_without_user);
        return view('superbuyers.all-downline-details', ['all_downline' => $all_downline]);
    }

    public function getDownlineUser($sponsor_id)
    {
        $get_sponsored_user = User::where('sponsor_id', $sponsor_id)->get();
        foreach ($get_sponsored_user as $user) {
            $this->direct_downline_array[] = $user->id;
        }
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
