<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategryController extends Controller
{

    public function addCategoryUI()
    {
        return view('admin.add-new-category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required',
        ]);

        $random = Str::random(4);
        $slug = Str::slug($request->name, '-');
        $unique_slug = $slug.'-'.$random;

        $category = new Category;

        if ($request->file != null)
        {
        $path = $request->file('file')->store('public/images');
        $category->image = $path;
        }

        $category->name = $request->name;
        $category->slug = $unique_slug;
        $category->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.category');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'name' => 'required',
        ]);

        $category = Category::find($id);

        if ($request->file != null)
        {
        $path = $request->file('file')->store('public/images');
        $category->image = $path;
        }

        $category->name = $request->name;
        $category->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.category');
    }

    public function index()
    {
        $list_categories = Category::all();

        return view('admin.categories', [
            'list_categories' => $list_categories
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        $request->session()->flash('fail', 'Task was successful!');
        return redirect()->route('list.category');
    }

    public function updateCategoryUI($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.edit-category',  ['category' => $category]);
    }

    public function getCategoryAPIs()
    {
        return $list_categories = Category::all();
    }

}
