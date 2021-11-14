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
        $products = Product::where('super_buyer_price', '!=', null)->get();
        return $products;
    }
    
}
