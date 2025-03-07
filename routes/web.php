<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProductsList;
use function Laravel\Prompts\alert;
use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    $user = request('username');
    $password = request('password');

    if (Auth::attempt(['user' => $user, 'password' => $password])) {
        return redirect()->route('produk');
    }

    return redirect()->route('login', ['error' => 'Username atau Password salah']);
})->name('post-login');

Route::get('/', function () {
    $categories = ProductsList::select('category')->distinct()->get();
    $products = ProductsList::paginate(5);
    return view('produk', ['products' => $products, 'categories' => $categories]);
})->middleware('auth')->name('produk');

Route::get('/search', function () {
    $search = request('search');
    $categories = ProductsList::select('category')->distinct()->get();
    $results = ProductsList::where('name', 'like', '%' . $search . '%')->paginate(5);
    return view('produk', ['products' => $results, 'categories' => $categories]);
})->middleware('auth')->name('search');

Route::get('/filter', function () {
    $category = request('category');
    $categories = ProductsList::select('category')->distinct()->get();
    $results = ProductsList::where('category', 'like', '%' . $category . '%')->paginate(5);
    return view('produk', ['products' => $results, 'categories' => $categories]);
})->middleware('auth')->name('filter');

Route::get('/add', function () {
    $categories = ProductsList::select('category')->distinct()->get();
    return view('add', ['categories' => $categories]);
})->middleware('auth')->name('add');

Route::post('/add', function () {
    $product = new ProductsList();
    $product->name = request('name');
    $product->buy_price = request('buy_price');
    $product->sell_price = request('sell_price');
    $product->stock = request('stock');
    $product->category = request('category');

    $file = request()->file('image');
    $file->move(public_path('images'), $file->getClientOriginalName());
    $product->image = 'images/' . $file->getClientOriginalName();

    $product->save();
    return redirect()->route('produk');
})->middleware('auth')->name('post');

Route::get('/{id}/edit', function ($id) {
    $product = ProductsList::find($id);
    $categories = ProductsList::select('category')->distinct()->get();
    return view('edit', ['product' => $product, 'categories' => $categories]);
})->middleware('auth')->name('edit');

Route::put('/{id}/edit', function ($id) {
    $product = ProductsList::find($id);
    $product->name = request('name');
    $product->buy_price = request('buy_price');
    $product->sell_price = request('sell_price');
    $product->stock = request('stock');
    $product->category = request('category');

    $file = request()->file('image');
    $file->move(public_path('images'), $file->getClientOriginalName());
    $product->image = 'images/' . $file->getClientOriginalName();

    $product->save();
    return redirect()->route('produk');
})->middleware('auth')->name('update');

Route::delete('/{id}', function ($id, ) {
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

Route::get('/export', function(){
    return view('ExportProducts', ['products' => ProductsList::all()]);
})->name('export')->middleware('auth');

