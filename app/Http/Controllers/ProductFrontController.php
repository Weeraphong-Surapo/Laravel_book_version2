<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function allproduct(Request $request){
        if(!empty($request->s)){
            $products = Product::where('category_id',$request->s)->get();
        }else{
            $products = Product::all();
        }

        return view('allProduct',compact('products'));
    }
}
