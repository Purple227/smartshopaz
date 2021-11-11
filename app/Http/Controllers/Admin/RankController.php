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
            'no_of_people' => 'required',
            'level' => 'required',
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
            $rank->level = $request->level;
            $rank->no_of_people = $request->no_of_people;
            $rank->image = $request->image;
            $rank->save();
    
            $request->session()->flash('status', 'Task was successful!');
            return redirect()->route('admin.rank.list');
    }

    public function index()
    {
        $list_ranks = Rank::all();
        return view('admin.ranks', [
            'list_ranks' => $list_ranks
        ]);
    }

    public function updateRankUI($slug)
    {
        $rank = Rank::where('slug', $slug)->first();
        return view('admin.edit-rank',  ['rank' => $rank]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'no_of_people' => 'required',
            'level' => ['required', 'unique:ranks'],
            ]);

        $rank = Rank::find($id);

        if ($request->file != null)
        {
        $path = $request->file('file')->store('public/images');
        $rank->image = $path;
        }

        $rank->name = $request->name;
        $rank->level = $request->level;
        $rank->no_of_people = $request->no_of_people;
        $rank->image = $request->image;
        $rank->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('admin.rank.list');
    }

}
