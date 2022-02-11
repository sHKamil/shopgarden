<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\QueryFilters\ProductFilters;

class MainViewController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $categories = ProductCategory::all();
        $products = Product::filterBy($filters)->paginate(9);

        // return view('welcome', compact('products','categories'));
        return view( view: 'welcome', data: [
            'categories' => ProductCategory::all(),
            'products' => $products
        ]);
    }

}
