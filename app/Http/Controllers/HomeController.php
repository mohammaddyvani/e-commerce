<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\DetailTransaction;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Exception;

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
            'products' => Product::orderBy('created_at', 'desc')->take(8)->get(),

        ];
        return view('dasboard', $data);
    }


    public function products($brands)
    {
        $data = [
            // 'products' => Product::where('name', $brands)->with('brand')->get(),
            'products' => Product::wherehas('brand', function ($query) use ($brands) {
                $query->where('name', $brands);
            })->get(),
        ];
        return view('product', $data);
    }

    public function category($catalog)
    {
        $data = [
            'products' => Product::where('catalog', $catalog)->get(),
        ];
        return view('product', $data);
    }

    public function detail($product)
    {
        $data = [
            'detailProduct' => Product::where('name', $product)->first(),
        ];
        return view('detailproduct', $data);
    }

    // public function cart(){
    //     $data = [
    //         'products' => Product::all(),
    //     ];
    //     return view('cart', $data);
    // }


    public function checkout()
    {
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => $transaction->detailTransaction()->with('product')->get() ?? [],
            'products' => Product::all(),
            'country' => Address::all(),
            'action' => '/insertaddress',
        ];
        return view('checkout', $data);
    }

    public function insertaddress(Request $request){
        Address::create($request->only('name', 'address', 'city', 'districts', 'province', 'country', 'postal_code', 'email', 'phone'));

        return redirect('/checkout');
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

    public function cart()
    {
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => !is_null($transaction) ? $transaction->detailTransaction()->with('product')->get() : [],
        ];

        return response()->json($data);
    }

    public function bigcart()
    {
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => $transaction->detailTransaction()->with('product')->get() ?? [],
        ];

        return view('cart', $data);
    }
    public function addToCart($id)
    {
        try {
            $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'pending']);

            if ($transaction->count() > 0) {
                $transaction = $transaction->first();
            } else {
                $transaction = Transaction::create([
                    'status' => 'pending'
                ]);
            }

            $product = Product::find($id);
            $check = DetailTransaction::where(['id_transaction' => $transaction->id, 'id_product' => $product->id]);

            if ($check->count() <= 0) {
                DetailTransaction::create([
                    'id_transaction' => $transaction->id,
                    'id_product' => $product->id,
                    'quantity' => 1,
                    'price' => $product->price
                ]);
            } else {
                $check->update([
                    'quantity' => $check->first()->quantity + 1,
                ]);
            }

            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function removeFromCart($id)
    {
        try {
            DetailTransaction::findOrFail($id)->delete();

            return response()->json([
                'message' => 'Data telah dihapus'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function removeFromBigcart($id)
    {
        try {
            DetailTransaction::findOrFail($id)->delete();

            return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function updateQty(Request $request, $id)
    {
        try {
            $detail = DetailTransaction::findOrFail($id);
            $detail->update([
                'quantity' => $request->qty,
            ]);

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
