<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Cart;
// use App\Dtos\Cart\CartDto;
// use App\Dtos\Cart\CartItemDto;
// use App\ValueObjects\Cart;
use Symfony\Component\HttpFoundation\JsonResponse;
use Exception;

class CartController extends Controller
{
    public function index()
    {
        $current_user_id = Auth::id();
        $carts = Cart::where('user_id', $current_user_id)->orderBy('updated_at')->get();
        $products = [];
        $i = 0;
        $sum = 0;
        foreach ($carts as $cart) {
            $products[$i] = Product::where('id', $cart->product_id)->first();
            $sum += $products[$i]->price*$cart->quantity;
            $i++;
        }

        return view('cart.index', [
            'carts' => $carts,
            'products' => $products,
            'sum' => $sum,
        ]);
    }

    public function delete($id)
    {
        $cart = Cart::where('id', $id);
        try{
            $cart->delete();
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

    public function add(Request $request): JsonResponse
    {
        $current_user_id = Auth::id();
        $cart = new Cart();
        $cart->user_id=$current_user_id;
        $cart->product_id=$request->id;
        $cart->quantity=$request->quantity;
        $cart->save();

        return response()->json([
            'status' => 'success'
        ]);
    }
    
    // public function destroy(Product $product): JsonResponse
    // {
    //     try {
    //         $cart = Session::get('cart', new Cart());
    //         Session::put('cart', $cart->removeItem($product));
    //         Session::flash('status', __('shop.product.status.delete.success'));
    //         return response()->json([
    //             'status' => 'success'
    //         ]);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Wystąpił błąd!'
    //         ])->setStatusCode(500);
    //     }
    // }
}
