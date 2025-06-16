<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AuthentController;
use App\Http\Controllers\RegisteredController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/userpage', function () {
    return view('userpage');
});

Route::get('/orderdetailspage', function () {
    return view('order_details_page');
});


Route::get('/product/{id}', function ($id) {
    // لاحقًا يمكن جلب المنتج من قاعدة البيانات
    return view('product', ['id' => $id]);
});

Route::get('/checkout', function () {

    return view('checkout');
});

Route::get('/track_order', function () {
    return view('track_order');
});

Route::get('/vendor_register', function () {
    return view('vendor.vendor_register');
});

Route::get('/dashboard', function () {
    return view('vendor.dashboard');
});


Route::get('/products', function () {
    return view('vendor.product.products');
});


Route::get('/add_product', function () {
    return view('vendor.product.add_product');
});

Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin_orders', function () {
    return view('admin.orders');
});


 Route::get('/loginUser', [AuthentController::class, 'login'])->name('loginUser');
 Route::get('/registerUser', [RegisteredController::class, 'register'])->name('registerUser');

Route::get('/orders/{order}/invoice', [InvoiceController::class, 'download'])->name('invoice.download');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
