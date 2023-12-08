<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function __construct()
    {
        // Apply authorization checks to specific methods
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('can:create,App\Models\Product')->only(['create', 'store']);
        $this->middleware('can:update,product')->only(['edit', 'update']);
        $this->middleware('can:delete,product')->only('destroy');
    }
    public function index(){
        return view('product.index');
    }
    public function ProductAdd()
    {
        return view('products.add');
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'status' => 'boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            $imagePath = null;
        }
        $status = $request->has('status');
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $status,
            'image_path' => $imagePath,
           
        ]);
        return redirect('/admin');
    }
    public function ProductList(){
        $products = Product::all();
        return view('products.productList', compact('products'));
    }
    public function productEdit($id){
        $product = Product::find($id);
        return view('products.productEdit', compact('product'));
    }
    public function productUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'status' => 'boolean',
        ]);
        $status = $request->has('status');
        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $status,
        ]);
        return redirect('admin/productList');
    }
    public function productDelete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/productList');
    }
}
