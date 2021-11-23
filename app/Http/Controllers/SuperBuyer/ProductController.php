<?php

namespace App\Http\Controllers\SuperBuyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

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
        return view('superbuyers.product-detail', ['single_product' => $single_product]);
    }

}
