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
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('admin/category/create') }}" class="btn btn-outline-primary">เพิ่มหมวดหมู่</a>
                    </div>
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-image">หมวดหมู่</th>
                                    <th class="product-total">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($categorys as $category)
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}
                                        </td>
                                        <td class="product-name">{{ $category->name }}</td>
                                        <td class="product-total">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                    class="btn btn-outline-warning mx-1">แก้ไข</a>
                                                <form action="{{url('admin/category',$category->id)}}" method="post" onsubmit="return confirm('ต้องการลบหมวดหมู่')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">ลบ</button>
                                                </form>
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
    <!-- end category -->
@endsection
