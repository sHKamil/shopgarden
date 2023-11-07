<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;

class CategoryController extends Controller
{
    public function create()
    {
        return view( view: 'products.categoryCreate', data:[
            'categories' => ProductCategory::all()
        ]);
    }

    public function add(Request $request)
    {
        $category = new ProductCategory($request->all());
        $category->save();
        return redirect(route('products.index'));
    }

    public function edit(ProductCategory $category)
    {
        return view( view: 'products.categoryEdit', data: [
            'category' => $category,
            'categories' => ProductCategory::all()
        ]);
    }

    public function update(ProductCategory $category, Request $request)
    {
        $category->fill($request->all());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/products');
            $category->image_path = str_replace("public/" ,"", $path);
        }
        $category->save();
        return redirect(route('products.index'));
    }

    public function delete($id)
    {
        $category = ProductCategory::where('id', $id);
        try{
            $category->delete();
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
