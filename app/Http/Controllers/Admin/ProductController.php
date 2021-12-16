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
use App\Models\ProductOption;


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

        $random = Str::random(4);
        $slug = Str::slug($request->title, '-');
        $unique_slug = $slug.'-'.$random;

        $product = new Product;

        if ( $request->hasFile('file') ) {
             $gimages = request('file');
             $gbasename = Str::random();
             $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
             $gimages->move('images', $goriginal);
             $path = 'images/'.$goriginal;
             $product->image = $path;
        } 

        $product->title = $request->title;
        $product->discount = $request->discount;
        //$product->category_id = $request->category_id;
        //$product->brand_id = $request->brand_id;
        $product->main_price = $request->main_price;
        $product->regular_price = $request->regular_price;
        $product->super_buyer_price = $request->super_buyer_price;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->slug = $unique_slug;
        $product->stock = $request->stock;
        $product->save();

        $request->session()->flash('status', 'Task was successful!');
        return $product->id;
        //return redirect()->route('list.product');
    }

    public function addMultipleProduct(Request $request)
    {
        $b = $request->multi_product_option;
        for ($i=0; $i < count($b) ; $i++) { 
            $save_multiple_option = ProductOption::create([
                'variation_name' => $b[$i] ['variationName'],
                'main_price' => $b[$i] ['mainPrice'],
                'regular_price' => $b[$i] ['regularPrice'],
                'super_buyer_price' => $b[$i] ['superBuyerPrice'],
                'weight' => $b[$i] ['weight'],
                'product_id' => $request->id
            ]);
        }
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
