<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        return view('site.categories.index', [
            'categories' => Category::where('active', true)->get()
        ]);
    }

    public function show(Category $category) {
        return view('site.categories.show', [
            'category' => $category
        ]);
    }
}
