<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Exception;

class CartController extends Controller
{
    public function index()
    {
        return view( view: 'cart.index'
        // ,data: [
        //     'cart' => Cart::paginate(15)
        // ]
    );
    }
}
