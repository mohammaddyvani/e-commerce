<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::all(),
            'brands' => Brand::all(),
        ];
        return view('cart', $data);
    }
}
