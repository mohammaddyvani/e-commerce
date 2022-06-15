<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/error', function () {
    return view('error404');
});

// Route::get('/admin', function () {
//     return view('admin.pages.dasboard');
// });

Route::get('/login', function () {
    return view('login');
});

// Route::get('/table', function () {
//     return view('admin.pages.datauser');
// });

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/detail', function () {
    return view('detailproduct');
});

Route::get('/aboutus', function () {
    return view('abouts');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});
// Route::get('/checkout', function () {
//     return view('checkout');
// });
Route::middleware(['auth.user', 'auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::get('brands/{name}', [HomeController::class, 'products'])->name('products');
    Route::get('category/{catalog}', [HomeController::class, 'category'])->name('category');
    Route::get('cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('bigcart', [HomeController::class, 'bigcart'])->name('bigcart');
    Route::get('wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('detail/{name}', [HomeController::class, 'detail'])->name('detail');
    Route::get('data-cart', [HomeController::class, 'cart'])->name('getDataCart');
    Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add-to-cart');
    Route::delete('remove-from-cart/{id}', [HomeController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::delete('remove-from-bigcart/{id}', [HomeController::class, 'removeFromBigcart'])->name('remove-from-bigcart');
    Route::post('{id}/update-qty', [HomeController::class, 'updateQty'])->name('update-qty');
});

// Route::get('cart', [ProductController::class, 'cart'])->name('cart');
// Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
// Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


// Admin
Route::middleware(['auth.admin', 'auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/datauser', [AdminController::class, 'datauser'])->name('datauser');
    Route::get('/datatransaction', [AdminController::class, 'datatransaction'])->name('datatransaction');
    Route::get('/addproduct', [AdminController::class, 'addproduct'])->name('addproduct');
    Route::get('/adduser', [AdminController::class, 'adduser'])->name('adduser');
    Route::get('/editproduct/{id}', [AdminController::class, 'editproduct'])->name('editproduct');
    Route::get('/edituser/{id}', [AdminController::class, 'edituser'])->name('edituser');
    Route::post('/insertproduct', [AdminController::class, 'insertproduct'])->name('insertproduct');
    Route::post('/insertuser', [AdminController::class, 'insertuser'])->name('insertuser');
    Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct'])->name('updateproduct');
    Route::post('/updateuser/{id}', [AdminController::class, 'updateuser'])->name('updateuser');
    Route::delete('/deleteproduct/{id}', [AdminController::class, 'delete'])->name('deleteproduct');
    Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
});

// Route::get('/tabelproduk', function () {
//     return view('admin.pages.tabelproduk');
// });

//auth
Route::prefix('auth')->group(function (){
    Route::get('/', [AuthController::class, 'index'])->name('auth');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'store'])->name('auth.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});