<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\QueryFilters\ProductFilters;
use Exception;

class ProductController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products = Product::filterBy($filters)->paginate(12);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view( view: 'products.show', data: [
            'product' => $product,
            'categories' => ProductCategory::all(),
            'products' => Product::paginate(4)
        ]);
    }

    public function create()
    {
        return view( view: 'products.create', data:[
            'categories' => ProductCategory::all()
        ]);
    }

    public function add(Request $request)
    {
        $product = new Product($request->all());
        if ($request->hasFile('image')) {
            $product->image_path = $request->file('image')->store('products');
        }
        $product->save();
        return redirect(route('products.index'));
    }

    public function edit(Product $product)
    {
        return view( view: 'products.edit', data: [
            'product' => $product,
            'categories' => ProductCategory::all()
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $product->fill($request->all());
        $product->save();
        return redirect(route('products.index'));
    }

    public function delete(Product $product)
    {
        try{
            $product->delete();
            return response()->json([
                'status'=>'success'
            ]);
        }catch(Exception $e){
            return response()->json([
                'status'=>'Error',
                'message'=>'Błąd usuwania',
            ])->setStatusCode(500);
        }
    }
}
