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

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
