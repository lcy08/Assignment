<?php

use App\Http\Controllers\ProductsExportController;
use Illuminate\Support\Facades\Route;
use App\Models\ProductsList;
use function Laravel\Prompts\alert;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    $user = request('username');
    $password = request('password');

    if (Auth::attempt(['user' => $user, 'password' => $password])) {
        return redirect()->route('produk');
    }

    alert("Login Gagal");
})->name('post-login');

Route::get('/', function () {
    $category = ProductsList::select('category')->distinct()->get();
    $products = ProductsList::paginate(5);
    return view('produk', ['products' => $products, 'categories' => $category]);
})->middleware('auth')->name('produk');

Route::get('/search', function () {
    $search = request('search');
    $results = ProductsList::where('name', 'like', '%' . $search . '%')->paginate(5);
    return view('produk', ['products' => $results]);
})->middleware('auth')->name('search');

Route::get('/filter', function () {
    $category = request('category');
    $results = ProductsList::where('category', 'like', '%' . $category . '%')->paginate(5);
    return view('produk', ['products' => $results]);
})->middleware('auth')->name('filter');

Route::get('/add', function () {
    return view('add');
})->middleware('auth')->name('add');

Route::post('/add', function () {
    $product = new ProductsList();
    $product->name = request('name');
    $product->buy_price = request('buy_price');
    $product->sell_price = request('sell_price');
    $product->stock = request('stock');
    $product->category = request('category');
    $product->image = request('image');
    $product->save();
    return redirect()->route('produk');
})->middleware('auth')->name('post');

Route::get('/{id}/edit', function ($id) {
    $product = ProductsList::find($id);
    return view('edit', ['product' => $product]);
})->middleware('auth')->name('edit');

Route::put('/{id}/edit', function ($id) {
    $product = ProductsList::find($id);
    $product->name = request('name');
    $product->buy_price = request('buy_price');
    $product->sell_price = request('sell_price');
    $product->stock = request('stock');
    $product->category = request('category');
    $product->image = request('image');
    $product->save();
    return redirect()->route('produk');
})->middleware('auth')->name('update');

Route::delete('/{id}', function ($id) {
    $product = ProductsList::find($id);
    $product->delete();
    return redirect()->route('produk');
})->middleware('auth')->name('destroy');

Route::get('/profil', function () {
    return view('profil');
})->middleware('auth')->name('profil');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->middleware('auth')->name('logout');

Route::get('/export', [ProductsExportController::class, 'index'])->middleware('auth')->name('export');
