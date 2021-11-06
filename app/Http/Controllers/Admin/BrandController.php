<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    

    public function addBrandUI()
    {
        return view('admin.add-new-brand');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required',
        ]);

        $random = Str::random(4);
        $slug = Str::slug($request->name, '-');
        $unique_slug = $slug.'-'.$random;

        $brand = new Brand;

        if ($request->file != null) {
        $path = $request->file('file')->store('public/images');
        $brand->image = $path;
        }      

        $brand->name = $request->name;
        $brand->slug = $unique_slug;
        $brand->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.brand');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'name' => 'required',
        ]);

        $brand = Brand::find($id);

        if ($request->file != null) {
        $path = $request->file('file')->store('public/images');
        $brand->image = $path;
        }

        $brand->name = $request->name;
        $brand->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.brand');
    }

    public function index()
    {
        $list_brands = Brand::all();

        return view('admin.brands', [
            'list_brands' => $list_brands
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        $request->session()->flash('fail', 'Task was successful!');
        return redirect()->route('list.brand');
    }

    public function updateBrandUI($slug)
    {
        $brand = Brand::where('slug',$slug)->first();
        return view('admin.edit-brand',  ['brand' => $brand]);
    }

    public function getBrandAPIs()
    {
        return $list_brands = Brand::all();
    }

}
