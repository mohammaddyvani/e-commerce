<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\DetailTransaction;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function checkout()
    {
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'Pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => !is_null($transaction) ? $transaction->detailTransaction()->with('product')->get() : [],
            'products' => Product::all(),
            'country' => Address::all(),
            'action' => '/insertaddress',
        ];
        return view('checkout', $data);
    }

    public function insertaddress(Request $request){
        $request->merge(['name' => $request->firstname .' '. $request->lastname]);
        $address = Address::create($request->only(['name', 'address', 'city', 'districts', 'province', 'country', 'postal_code', 'email', 'phone']));
        Transaction::where(['id_user' => Auth::user()->id, 'status' => 'Pending'])->update([
            'id_address' => $address->id,
            'status' => 'Packing',
            'total_price' => $request->total_price,
            'total_payment' => $request->total_payment
        ]);

        return redirect('/myaccount');
    }

    public function updateaddress(Request $request){
        $request->merge(['name' => $request->firstname .' '. $request->lastname]);
        $data = Address::find($request->id);
        Address::where('id', $request->id)->update($request->only(['name', 'address', 'city', 'districts', 'province', 'country', 'postal_code', 'email', 'phone']));

        return redirect('/myaccount');
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
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'Pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => !is_null($transaction) ? $transaction->detailTransaction()->with('product')->get() : [],
        ];

        return response()->json($data);
    }

    public function bigcart()
    {
        $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'Pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->detailTransaction->count() : 0,
            'data' => !is_null($transaction) ? $transaction->detailTransaction()->with('product')->get() : [],
        ];

        return view('cart', $data);
    }
    public function addToCart($id)
    {
        try {
            $transaction = Transaction::where(['id_user' => Auth::user()->id, 'status' => 'Pending']);

            if ($transaction->count() > 0) {
                $transaction = $transaction->first();
            } else {
                $transaction = Transaction::create([
                    'id_user' => Auth::user()->id,
                    'status' => 'Pending'
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

    public function cancelorder($id)
    {
        try {
            Transaction::findOrFail($id)->delete();

            return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function orderconfirmation($id){
        try{
            $order = Transaction::findOrFail($id);
            $order->update([
                'status' => 'Delivered'
            ]);

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
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

    public function myaccount(){
        $data = [
            'user' => User::where('id', Auth::user()->id)->first(),
            // 'default_address' => Address::where('id', Auth::user()->id)->latest(),
            'transaction' => Transaction::where(['id_user' => Auth::user()->id])->get(),

        ];

        return view('myaccount', $data);
    }

    // public function changepassword(Request $request){
    //     $user = Auth::user();
        
    //     $request->validate([
    //         'newpassword' => 'required',
    //         'confrimnewpassword' => 'required|same:newpassword',
    //     ]);

    //     if(Hash::check($request->oldpassword, $user->password)){
    //         $user->update([
    //             'password' => Hash::make($request->newpassword),
    //         ]);
    //         return redirect()->back()->with('success', 'Password berhasil diubah');
    //     }else{
    //         return redirect()->back()->with('error', 'Password lama tidak sesuai');
    //     }

    //     return redirect()->back();
    // }

    //Ganti Password V2
    public function changepassword(Request $request){
        $user = Auth::user();
        
        $request->validate([
            'newpassword' => 'required',
            'confrimnewpassword' => 'required|same:newpassword',
        ]);

        if(Hash::check($request->oldpassword, $user->password)){
            try {
                User::where('id', $user->id)->update([
                    'password' => Hash::make($request->newpassword),
                ]);
                
                return redirect()->back()->with('success', 'Password berhasil diubah');
            } catch(Exception $e){
                return redirect()->back()->withErrors(['error' => 'Opps! error blokkk']);
            }
        }else{
            return redirect()->back()->withErrors(['error' => 'Password lama tidak sesuai']);
        }

        return redirect()->back();
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }
}
