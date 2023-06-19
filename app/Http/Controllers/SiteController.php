<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('site.home', [
            'products' => Product::with(['category'])->where('active', true)->latest()->take(10)->get()
        ]);
    }
    public function about() {
        return view('site.about');
    }
    public function footer() {
        return view('site.footer');
    }
    public function product() {
        return view('site.product');
    }
    public function FAQs() {
        return view('site.FAQs');
    }
    public function contact() {
        return view('site.contact');
    }
}
