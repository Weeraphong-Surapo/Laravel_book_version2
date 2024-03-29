<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('user_id',Auth::user()->id)->with('products')->get();
        return view('cart',compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $product_id = $request->input('product_id');
            $check_cart = Cart::where('user_id', Auth::user()->id)
                ->where('product_id', $product_id)
                ->first();

            if ($check_cart) {
                $check_cart->product_qty += 1;
                $check_cart->save();
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_qty = 1;
                $cart->product_id = $product_id;
                $cart->save();
            }
            return redirect('cart');
        } else {
            return to_route('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
