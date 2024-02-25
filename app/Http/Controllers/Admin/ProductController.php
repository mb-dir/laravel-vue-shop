<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category', 'brand')->get();
        return Inertia::render("Admin/Products/Index", compact('products'));
    }
}
