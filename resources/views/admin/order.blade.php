@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>ประเภทสินค้าทั้งหมด</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- category -->
    <div class="cart-section mt-4 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-image">รหัส</th>
                                    <th class="product-image">ที่อยู่</th>
                                    <th class="product-image">สินค้า</th>
                                    <th class="product-image">ชำระ</th>
                                    <th class="product-image">สถานะ</th>
                                    <th class="product-image">วันที่สั่งซื้อ</th>
                                    <th class="product-total">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($orders as $order)
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}
                                        </td>
                                        <td class="product-name">{{ $order->code }}</td>
                                        <td class="product-name">
                                            <p>ชื่อ : {{ $order->full_name }}</p>
                                            <p>เบอร์โทร : {{ $order->phone }}</p>
                                            <p>ที่อยู่ : {{ $order->address }}</p>
                                        </td>
                                        <td class="product-name">
                                            @foreach ($order->orders as $list)
                                                {{ $list->product->name }} x {{ $list->product_qty }}
                                            @endforeach
                                        </td>
                                        <td class="product-name">
                                            @if ($order->type_pay == 1)
                                                <span class="badge bg-primary p-2 text-white">โอนชำระ</span>
                                            @else
                                                <span class="badge bg-info p-2 text-white">ปลายทาง</span>
                                            @endif
                                        </td>
                                        <td class="product-name">
                                            @if ($order->status == 0)
                                                <span class="badge bg-warning p-2">กำลังดำเนินการ</span>
                                            @elseif ($order->status == 1)
                                                <span class="badge bg-success p-2 text-white">กำลังจัดส่ง</span>
                                            @else
                                                <span class="badge bg-danger p-2 text-white">ไม่รับออเดอร์</span>
                                            @endif
                                        </td>
                                        <td class="product-name">{{ $order->created_at }}</td>
                                        <td class="product-total">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/order/' . $order->id . '/confirm') }}"
                                                    class="btn btn-outline-success mx-1">จัดส่ง</a>
                                                <a href="{{ url('admin/order/' . $order->id . '/noconfirm') }}"
                                                    class="btn btn-outline-danger">ไม่รับออเดอร์</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end order -->
@endsection
