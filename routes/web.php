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

// Route::get('/checkout', function () {
//     return view('checkout');
// });

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/brands/{name}', [HomeController::class, 'products'])->name('products');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');


Route::get('/detail', [HomeController::class, 'detail'])->name('detail');


// Admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/addproduct', [AdminController::class, 'addproduct'])->name('addproduct');
Route::get('/datauser', [AdminController::class, 'datauser'])->name('datauser');
Route::get('/datatransaction', [AdminController::class, 'datatransaction'])->name('datatransaction');
Route::get('/editproduct/{id}', [AdminController::class, 'editproduct'])->name('editproduct');
Route::get('/edituser/{id}', [AdminController::class, 'edituser'])->name('edituser');
Route::post('/insertproduct', [AdminController::class, 'insertproduct'])->name('insertproduct');
Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct'])->name('updateproduct');
Route::post('/updateuser/{id}', [AdminController::class, 'updateuser'])->name('updateuser');
Route::delete('/deleteproduct/{id}', [AdminController::class, 'delete'])->name('deleteproduct');
Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');

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