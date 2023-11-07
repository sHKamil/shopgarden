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
        $promo_product = $promo_code ? Product::where('id', $promo_code->product_id)->first() : null;
        if ($products[0] === null){
            return view( view: 'welcomeNoItems');
        }

        return view( view: 'welcome', data: [
            'categories' => ProductCategory::all(),
            'products' => $products,
            'promo_code' => $promo_code,
            'promo_product' => $promo_product
        ]);
    }

    public function about()
    {
        return view( view: 'about');
    }

    public function statute()
    {
        return view( view: 'statute');
    }

    public function contact()
    {
        return view( view: 'contact');
    }

}
