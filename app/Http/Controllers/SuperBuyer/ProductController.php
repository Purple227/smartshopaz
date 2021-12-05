<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductOption;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('superbuyers.products');
    }

    public function products()
    {
        $products = Product::where('super_buyer_price', '!=', null)->paginate(8);
        return $products;
    }

    public function singleProduct($slug)
    {
        $single_product = Product::where('slug', $slug)->with('category', 'brand')->first();
        $product_variety = ProductOption::where('product_id', $single_product->id)->get();
        return view('superbuyers.product-detail', ['single_product' => $single_product, 'product_variety' => $product_variety]);
    }

    public function APIsSingleProduct(Request $request)
    {
        $single_product = Product::where('slug', $request->slug)->with('category', 'brand')->first();

        if ($single_product->id != null)
        {
            $product_variety = ProductOption::where('product_id',$single_product->id)->get();
        } 
        return ['single_product' => $single_product, 'product_variety' => $product_variety];
    }

}
