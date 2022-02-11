<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\PromoCode;
use App\QueryFilters\ProductFilters;

class MainViewController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products = Product::filterBy($filters)->paginate(9);
        $promo_code = PromoCode::where('type', 'main')->first();
        $promo_product = Product::where('id', $promo_code->product_id)->first();
        // return view('welcome', compact('products','categories'));
        return view( view: 'welcome', data: [
            'categories' => ProductCategory::all(),
            'products' => $products,
            'promo_code' => $promo_code,
            'promo_product' => $promo_product
        ]);
    }

}
