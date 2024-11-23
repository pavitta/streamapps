<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\checkoutController;
use App\Http\Controllers\Product\ShoppingCartController;
use App\Models\Category\Category;
use App\Models\Product\Product;

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

Route::get('/', function () {
    $products = Product::with('category:id,name')
    ->where(function ($query) {
        $query->where('top_seller', '>=', 100)
              ->orWhere('top_trending', '>=', 10);
    })
    ->get();

    $product = [
        'top_seller' => $products->where('top_seller', '>=', 100),
        'top_trending' => $products->where('top_trending', '>=', 10),
        'category' => Category::all()
    ];
    return view('welcome',compact('product'));
})->name('/');

Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('home', HomeController::class)->except('index');
    Route::resource('shoppingcart', ShoppingCartController::class);
    Route::resource('checkout', checkoutController::class);
});
