<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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

        $category = new Category;

        //$path = $request->file('file')->store('public/images');

        $path = Storage::putFile('public/images', new File($request->file));

        $category->image = $path;
        $category->name = $request->name;
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

        $path = $request->file('file')->store('public/images');

        $category->image = $path;
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

    public function updateCategoryUI($id)
    {
        $category = Category::find($id);
        return view('admin.edit-category',  ['category' => $category]);
    }

}
