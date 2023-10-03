@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>สินค้าทั้งหมด</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- product -->
    <div class="cart-section mt-4 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('admin/product/create') }}" class="btn btn-outline-primary">เพิ่มสินค้า</a>
                    </div>
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-image">รูปภาพ</th>
                                    <th class="product-name">สินค้า</th>
                                    <th class="product-price">ราคา</th>
                                    <th class="product-quantity">จำนวน</th>
                                    <th class="product-total">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($products as $product)
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}
                                        </td>
                                        <td class="product-image"><img src="{{asset($product->img)}}"
                                                alt=""></td>
                                        <td class="product-name">{{ $product->name }}</td>
                                        <td class="product-price">{{ $product->price }}</td>
                                        <td class="product-quantity">{{ $product->stock }}</td>
                                        <td class="product-total">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/product/' . $product->id . '/edit') }}"
                                                    class="btn btn-outline-warning">แก้ไข</a>
                                                <button class="btn btn-outline-danger">ลบ</button>
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
    <!-- end product -->
@endsection
