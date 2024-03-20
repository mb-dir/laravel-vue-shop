<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category', 'brand')->get();
        $brands = Brand::all();
        $categories = Category::all();
        return Inertia::render("Admin/Products/Index", compact('products', 'brands', 'categories'));
    }

    public function destroy(Product $product){
        $product->delete();
        return Redirect::route('admin.product.index');
    }

    public function store(Request $request){
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        if($request->hasFile('product_images')){
            $productImages = $request->file('product_images');
            foreach ($productImages as $img){
                // Generate a unique name for the image using timestamp and random string
                $uniqueName = time() . '-' . Str::random(10) . '.' . $img->getClientOriginalExtension();
                // Store the image in the public folder with the unique name
                $img->move('product_images', $uniqueName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }

        return Redirect::route('admin.product.index');
    }
}
