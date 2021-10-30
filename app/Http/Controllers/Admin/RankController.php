<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rank;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RankController extends Controller
{
    public function addRankUI()
    {
        return view('admin.add-rank');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            ]);
    
            $random = Str::random(4);
            $slug = Str::slug($request->name, '-');
            $unique_slug = $slug.'-'.$random;
    
            $rank = new Rank;
    
            if ($request->file != null)
            {
            $path = $request->file('file')->store('public/images');
            $rank->image = $path;
            }
    
            $rank->name = $request->name;
            $rank->slug = $unique_slug;
            $rank->save();
    
            $request->session()->flash('status', 'Task was successful!');
            return redirect()->route('list.rank');
    }

    public function rankListUI()
    {

    }
}
