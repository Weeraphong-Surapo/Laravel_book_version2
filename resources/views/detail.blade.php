@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>ประวัติการสั่งซื้อ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="cart-section mt-5 mb-150">
        <div class="container">
            <a href="{{ url('history') }}" class="btn btn-outline-secondary mb-3">กลับ</a>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            กรอกที่อยู่จัดส่ง
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">

                                            <p><input disabled value="{{ $lists->full_name }}" class="form-control"
                                                    type="text" placeholder="ชื่อ - สกุล" name="full_name" required></p>
                                            <p><input disabled value="{{ $lists->phone }}" class="form-control"
                                                    type="tel" placeholder="เบอร์โทร" name="phone" required></p>
                                            <p>
                                                <textarea disabled class="form-control" required name="address" id="bill" cols="30" rows="10"
                                                    placeholder="ที่อยู่">{{ $lists->address }}</textarea>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-name">สินค้า</th>
                                    <th class="product-name">จำนวน</th>
                                    <th class="product-price">ราคา/บาท</th>
                                    <th class="product-price">รวมราคา/บาท</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                    
                                @endphp
                                @foreach ($lists->orders as $order)
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}</a>
                                        </td>

                                        <td class="product-name">{{ $order->product->name }}</td>
                                        <td class="product-quantity">{{ $order->product_qty }}</td>
                                        <td class="product-price">{{ number_format($order->product->price, 2) }}</td>
                                        <td class="product-quantity">
                                            {{ number_format($order->product->price * $order->product_qty, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="alert alert-primary mt-3">การชำระ :
                            <b>{{ $lists->type_pay == 1 ? 'โอนธนาคาร' : 'ปลายทาง' }}</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
