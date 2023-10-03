<?php

namespace App\Http\Controllers;

use App\Models\ListOrder;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function order()
    {
        $orders = ListOrder::with(['orders', 'orders.product'])->get();
        return view('admin.order', compact('orders'));
    }

    public function orderconfirm($id)
    {
        $list = ListOrder::find($id);
        $list->status = 1;
        $list->save();
        return back();
    }

    public function ordernoconfirm($id)
    {
        $list = ListOrder::find($id);
        $list->status = 999;
        $list->save();
        return back();
    }

    public function reportall()
    {
        $products = Product::all();

        // Load the related orders for each product and pluck the prices
        $productChart = $products->map(function ($product) {
            return [
                'product_name' => $product->name,
                'product_qty' => $product->stock,
            ];
        });
        return view('admin.reportall', compact('productChart'));
    }
}
