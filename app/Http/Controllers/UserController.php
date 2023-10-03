<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\ListOrder;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        return view('Form.login');
    }
    public function register()
    {
        return view('Form.register');
    }

    public function loginpost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->admin) {
                return redirect()->to('admin/product');
            } else {
                return redirect()->intended('/');
            }



        }

        return back()->withErrors([
            'email' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง',
        ])->onlyInput('email');
    }

    public function registerpost(Request $request)
    {
        $this->validate($request, [
            'password' => 'confirmed'
        ], [
            'password.confirmed' => 'รหัสผ่านไม่ตรงกัน'
        ]);
        $user = new User;
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect('login');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function getcategory()
    {
        $categorys = Category::all();
        $data = [];
        foreach ($categorys as $categorys) {
            $data[] = [
                'id' => $categorys['id'],
                'name' => $categorys['name']
            ];
        }

        return response()->json($data);
    }

    public function checkout(){
        $carts = Cart::where('user_id',Auth::user()->id)->with('products')->get();
        return view('checkout',compact('carts'));
    }

    public function history(){
        $historys = ListOrder::where('user_id',Auth::user()->id)->get();

        return view('history',compact('historys'));
    }

    public function paycheckout(Request $request){
        $list = new ListOrder();
        $list->code = '#'.time();
        $list->full_name = $request->input('full_name');
        $list->phone = $request->input('phone');
        $list->address = $request->input('address');
        $list->user_id = Auth::user()->id;
        $list->type_pay = $request->input('type_pay');
        $list->save();

        $carts = Cart::where('user_id', Auth::user()->id)
        ->get();

        foreach($carts as $cart){
            $order = new Order();
            $order->list_order_id = $list->id;
            $order->product_id = $cart->product_id;
            $order->product_qty = $cart->product_qty;
            $order->save();
        }

        $cartUser = Cart::where('user_id',Auth::user()->id);
        $cartUser->delete();
        return view('thankyou');
    }

    public function historydetail($id){
        $lists = ListOrder::with(['orders', 'orders.product'])->find($id);
        // return response()->json($lists);
        return view('detail',compact('lists'));
    }
}
