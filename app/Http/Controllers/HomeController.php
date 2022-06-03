<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $data = [
            'new_products' => Product::orderBy('id')->take(8)->get(),
        ];
        return view('dasboard', $data);
    }


    public function products($brands)
    {
        $data = [
            // 'products' => Product::where('name', $brands)->with('brand')->get(),
            'products' =>Product::wherehas('brand', function ($query) use ($brands) {
                $query->where('name', $brands);
            })->get(),
        ];
        return view('product', $data);
    }

    public function cart(){
        $data = [
            'products' => Product::all(),
        ];
        return view('cart', $data);
    }

    public function checkout(){
        $data = [
            'products' => Product::all(),
        ];
        return view('checkout', $data);
    }

    public function detail(){
        Product::all();
        return view('detailproduct');
    }


    // public function error()
    // {
    //     return view('error404');
    // }

    // public function wishlist()
    // {
    //     $data = [
    //         'title' => 'Wishlist',
    //         'wishlistProduct' => Product::all(),
    //     ];
    //     return view('wishlist', $data);
    // }
}
