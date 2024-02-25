<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();

        return Inertia::render("Admin/Dashboard", compact('products'));
    }
}
