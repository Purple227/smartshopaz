<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RonCode;

class RonCodeController extends Controller
{
    

    public function addRonCodeUI()
    {
        return view('admin.add-ron-code');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'ron_code' => ['required', 'unique:ron_codes'],
        ]);

        $code = new RonCode;

        $code->ron_code = $request->ron_code;
        $code->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.ron.code');
    }

    public function index()
    {
        $ron_codes = RonCode::all();

        return view('admin.ron-codes', [
            'ron_codes' => $ron_codes
        ]);
    }

}
