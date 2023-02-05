<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PhoneController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [ProductsController::class, 'getProduct'])->name('products');
Route::get('product/create/{id}', [ProductsController::class, 'addProductCart'])->middleware(['auth'])->name('addProductCart');

Route::get('checkout/{id}', [ProductsController::class, 'checkoutProduct'])->name('checkout');
Route::post('invoice', [ProductsController::class, 'getInvoice'])->middleware(['auth'])->name('getInvoice');
Route::get('listcart', [ProductsController::class, 'getCart'])->middleware(['auth'])->name('cart');
Route::get('cart/delet/{id}', [ProductsController::class, 'deleteItemCart'])->middleware(['auth'])->name('deleteItemCart');

Route::get('/about', function () {
    $cartCount = Cart::count();  
    return view('about', [ 'cartCount' => $cartCount]);
})->name('about');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('products/create', [ProductsController::class, 'store'])->name('create_product');
// Route::get('products/getProduct', [ProductsController::class, 'getProduct'])->name('getProduct');
// Route::get('phones', [PhoneController::class, 'index'])->name('phones');
// Route::get('checkout', [ProductsController::class, 'checkoutProduct'])->name('checkoutProduct');


// Route::get('cart', function () {
//         return view('cart');
// })->name('cart');

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/tuwaiq', function () {
//     return view('tuwaiq');
// })->name('tuwaiq');






// Route::get('/phnedetails', function () {
//     $phone =[
//         ['Type' => 'i phone 14','Price' => 3500,'Color' => 'black'],
//         ['Type' => 'Samsung','Price' => 2500,'Color' => 'blue'],
//         ['Type' => 'Huawi','Price' => 1200,'Color' => 'gold'],
//     ];
    
//     return view('phnedetails', ['phone' => $phone]);
// });









