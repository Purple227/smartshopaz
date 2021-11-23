<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    

    public function addProductUI()
    {
        $list_brands = Brand::all();
        $list_categories = Category::all();

        return view('admin.add-new-product', ['list_brands' => $list_brands, 'list_categories' => $list_categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required',
        'main_price' => 'required_if:multiple_main_price,==,null',
        'description' => 'required',
        ]);

        $random = Str::random(4);
        $slug = Str::slug($request->title, '-');
        $unique_slug = $slug.'-'.$random;

        $product = new Product;

        if ($request->file != null) {
        $path = $request->file('file')->store('public/images');
        $product->image = $path ;
        }

        $product->title = $request->title;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->main_price = $request->main_price;
        $product->regular_price = $request->regular_price;
        $product->super_buyer_price = $request->super_buyer_price;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->slug = $unique_slug;
        $product->stock = $request->stock;
        $product->save();

/*
        $b = $request->basket;
        for ($i=0; $i < count($b) ; $i++) { 
            $tag = $order->tags()->create([
                'name' => $b[$i] ['name'],
                'count' => $b[$i] ['count'],
                'price' => $b[$i] ['price'],
            ]);
        }
*/

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.product');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'title' => 'required',
        'main_price' => 'required_if:multiple_main_price,==,null',
        'description' => 'required',
        ]);

        $product = Product::find($id);

        if ($request->file != null) 
        {
        $path = $request->file('file')->store('public/images');
        $product->image = $path ;
        }

        $product->title = $request->title;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->main_price = $request->main_price == null ? $request->multiple_main_price : $request->main_price;
        $product->regular_price = $request->regular_price == null ? $request->multiple_regular_price : $request->regular_price;
        $product->super_buyer_price = $request->super_buyer_price == null ? $request->multiple_super_buyer_price : $request->super_buyer_price;
        $product->weight = $request->weight == null ? $request->multiple_weight : $request->weight;
        $product->description = $request->description;
        $product->variation_name = $request->variation_name;
        $product->save();

        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('list.product');
    }

    public function index()
    {
       $list_products = Product::with('category')->get();

        return view('admin.products', [
            'list_products' => $list_products
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        $request->session()->flash('fail', 'Task was successful!');
        return redirect()->route('list.product');
    }

    public function updateProductUI($slug)
    {
        $product = Product::where('slug', $slug)->with('category', 'brand')->first();

        $list_brands = Brand::all();
        $list_categories = Category::all();

        return view('admin.edit-product',  ['product' => $product, 'list_brands' => $list_brands, 'list_categories' => $list_categories]);
    }



}
