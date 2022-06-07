<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Address;
use File;

class AdminController extends Controller
{
    public function admin()
    {
        $data = [
            Brand::all(),
            'products' => Product::all(),
        ];
        return view('admin.pages.product.dataproduct', $data);
    }

    public function addproduct(){
        $data = [
            'brands' => Brand::all(),
            'action' => '/insertproduct'
        ];
        return view('admin.pages.product.addproduct', $data);
    }

    public function insertproduct(Request $request){
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,gif'
        ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = public_path('assets/images/product');
            $filename = 'product_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['image' => $filename]);
        Product::create($request->only('brand_id', 'catalog', 'name', 'des_Dimensions', 'des_Display', 'des_OS', 'des_Chipset', 'des_CPU', 'des_memory', 'des_battery', 'short_description', 'price', 'stock', 'discount', 'image'));

        return redirect('/admin');
    }

    public function editproduct($id){
        $data = [
            'brands' => Brand::all(),
            'products' => Product::find($id),
            'action' => "/updateproduct/$id"
        ];
        return view('admin.pages.product.addproduct', $data);
    }

    public function updateproduct(Request $request){
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,gif',
            'stock' => 'required|numeric'
        ]);

        $data = Product::find($request->id);
        if($request->hasFile('file')){
            $path = public_path('assets/images/product');
            if(file_exists($path . '/' . $data->image)){
               File::delete($path . '/' . $data->image); 
            }

            $file = $request->file('file');
            $filename = 'product_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['image' => $filename]);
        Product::where('id', $request->id)->update($request->only('brand_id', 'catalog', 'name', 'des_Dimensions', 'des_Display', 'des_OS', 'des_Chipset', 'des_CPU', 'des_memory', 'des_battery', 'short_description', 'price', 'stock', 'discount', 'image'));

        return redirect('/admin');
    }

    public function delete($id)
    {
        $data = Product::findOrFail($id);

        if(file_exists(public_path('assets/images/product/' . $data->image))){
            File::delete(public_path('assets/images/product/' . $data->image));
        }
        $data->delete();
        return redirect('/admin');
    }


    public function datauser()
    {
        $data = [
            'users' => User::all(),
        ];
        return view('admin.pages.product.datauser', $data);
    }

    public function edituser($id)
    {
        $data = [
            'users' => User::find($id),
            'action' => "/updateuser/$id"
        ];
        return view('admin.pages.product.edituser', $data);
    }

    public function updateuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required|numeric',
            'role' => 'required'
        ]);

        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->role = $request->role;
        $data->save();

        return redirect('/admin/datauser');
    }

    public function deleteuser($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('/admin/datauser');
    }

    public function datatransaction()
    {
        $data = [
            'transactions' => Transaction::all(),
            Address::all(),
        ];
        return view('admin.pages.datatransaction', $data);
    }
}

