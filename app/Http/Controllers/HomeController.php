<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class HomeController extends Controller
{
    public function index()
    {
        $list_categories = Category::has('products')->get();
        $list_product_latest = Product::orderBy('id', 'desc')->with('category')->take(10)->get();
        $list_brands = Brand::has('products')->get();

        $review_product = Product::orderBy('id', 'desc')->with('category')->inRandomOrder()->take(10)->get();
        $top_rated_product = Product::orderBy('id', 'desc')->with('category')->inRandomOrder()->take(10)->get();

        return view('index', [
            'list_categories' => $list_categories, 'list_product_latest' => $list_product_latest, 'list_brands' => $list_brands, 'top_rated_product' => $top_rated_product, 'review_product' => $review_product 
        ]);
    }

    public function search(Request $request)
    {
        $list_product = Product::where('title','LIKE',"%$request->search_query%")
        ->with('category')
        ->take(8)
        ->get();
       return response()->json($list_product);
    }

}
