<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\ProductOption;

class HomeController extends Controller
{
    public function index()
    {
        $list_categories = Category::has('products')->get();
        $list_product_latest = Product::orderBy('id', 'desc')->where('regular_price', '!=', null)->with('category')->take(10)->get();
        $list_brands = Brand::has('products')->get();
        $sliders = Slider::orderBy('id', 'desc')->get();

        $banners = Banner::orderBy('id', 'desc')->get();

        $review_product = Product::orderBy('id', 'desc')->with('category')->inRandomOrder()->take(10)->get();
        $top_rated_product = Product::orderBy('id', 'desc')->with('category')->inRandomOrder()->take(10)->get();

        return view('index', 
        [
            'list_categories' => $list_categories, 
            'list_product_latest' => $list_product_latest, 
            'list_brands' => $list_brands, 
            'top_rated_product' => $top_rated_product, 
            'review_product' => $review_product,
            'sliders' => $sliders,
            'banners' => $banners
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

    public function shopUI()
    {
        $list_categories = Category::has('products')->get();
        return view('shop' , [
            'list_categories' => $list_categories]);
    }

    public function ProductAPIs(Request $request)
    {
        $pagination = $request->pagination == null ? 8 : $request->pagination;
        $list_product_latest = Product::orderBy('id', 'desc')->with('category')->paginate($pagination);
        return $list_product_latest;
    }

    public function ProductAlphabetAPIsSort(Request $request)
    {
        $alphabet_sort = $request->alpha_sort == 1 ? 'desc' : 'asc';
        $alpha_sort_product = Product::orderBy('title', $alphabet_sort)->with('category')->paginate(26);
    }

    public function ProductPriceAPIsSort(Request $request)
    {
        $price_sort = $request->price_sort == 1 ? 'asc' : 'desc';
        $alpha_sort_product = Product::orderBy('regular_price', '$price_sort')->with('category')->paginate(10);
    }

    public function singleProductAPIs($id)
    {
        $product = Product::where('id', $id)->with('category', 'brand')->first();
        return $product;
    }

    public function categoryUI($slug)
    {
        $list_categories = Category::has('products')->get();
        $category = Category::where('slug', $slug)->first();
        $list_product_latest = Product::where('category_id', $category->id)->orderBy('id', 'desc')->with('category')->paginate(20);
        return view('categories', ['list_product_latest' => $list_product_latest, 'list_categories' => $list_categories]);
    }

    public function singleProductUI($slug)
    {
        $product = Product::where('slug', $slug)->with('category', 'brand')->first();
        $product_variety = ProductOption::where('product_id', $product->id)->get();
        $list_categories = Category::has('products')->get();
        return view('product-single', ['product' => $product, 'product_variety' => $product_variety,'list_categories' => $list_categories ]);
    }

}
