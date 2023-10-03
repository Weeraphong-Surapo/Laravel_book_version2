@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>ตะกร้าสินค้า</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-image">รูปภาพ</th>
                                    <th class="product-name">สินค้า</th>
                                    <th class="product-price">ราคา</th>
                                    <th class="product-quantity">จำนวน</th>
                                    <th class="product-total">รวม</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                    $total = 0;

                                @endphp
                                @foreach ($carts as $cart)
                                @php
                                    $total += $cart->products->price * $cart->product_qty
                                @endphp
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}</a>
                                        </td>
                                        <td class="product-image"><img src="{{ asset($cart->products->img) }}"
                                                alt=""></td>
                                        <td class="product-name">{{ $cart->products->name }}</td>
                                        <td class="product-price">฿ {{ number_format($cart->products->price,2) }}</td>
                                        <td class="product-quantity">{{ $cart->product_qty }}</td>
                                        <td class="product-total">{{ number_format($cart->products->price * $cart->product_qty) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>รวม</th>
                                    <th>ราคา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>ราคารวม: </strong></td>
                                    <td>฿{{number_format($total,2)}}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>ค่าส่ง: </strong></td>
                                    <td>ฟรี</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>รวมทั้งหมด: </strong></td>
                                    <td>฿{{number_format($total,2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="cart.html" class="boxed-btn">อัพเดตตะกร้า</a>
                            <a href="{{url('checkout')}}" class="boxed-btn black">ดำเนินการต่อ</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->
@endsection
