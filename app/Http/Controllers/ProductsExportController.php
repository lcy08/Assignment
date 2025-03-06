<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsList;

class ProductsExportController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $search = request('search');
            $results = ProductsList::where('name', 'like', '%' . $search . '%');
            return view('ExportProducts', ['products' => $results]);
        }
        return view('ExportProducts', ['products' => ProductsList::all()]);
    }
}
