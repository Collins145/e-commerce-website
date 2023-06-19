<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('site.products.index', [
            'products' => Product::with(['category'])->where('active', true)->get()
        ]);
    }

    public function show(Product $product) {
        return view('site.products.show', [
            'product' => $product
        ]);
    }
}
