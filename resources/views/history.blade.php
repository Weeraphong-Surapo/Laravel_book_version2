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
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove">ลำดับ</th>
                                    <th class="product-name">รหัส</th>
                                    <th class="product-name">สถานะ</th>
                                    <th class="product-price">วันที่สั่งซื้อ</th>
                                    <th class="product-total"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                    
                                @endphp
                                @foreach ($historys as $history)
                                    <tr class="table-body-row">
                                        <td class="product-remove">{{ $i++ }}</a>
                                        </td>

                                        <td class="product-name">{{ $history->code }}</td>
                                        <td class="product-price">
                                            @if ($history->status == 0)
                                                <span class="badge bg-warning p-2">กำลังดำเนินการ</span>
                                            @elseif ($history->status == 1)
                                                <span class="badge bg-success p-2 text-white">กำลังจัดส่ง</span>
                                            @else
                                                <span class="badge bg-danger p-2 text-white">ไม่รับออเดอร์</span>
                                            @endif
                                        </td>
                                        <td class="product-price">{{ $history->created_at }}</td>
                                        <td class="product-quantity">
                                            <a href="{{ url('history', $history->id) }}"
                                                class="btn btn-outline-info">รายละเอียด</a>
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
@endsection
