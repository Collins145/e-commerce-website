<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('site.shop');
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
