@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>ชำระเงิน</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-5 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('paycheckout')}}" method="POST">
                        @csrf
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

                                                <p><input class="form-control" type="text" placeholder="ชื่อ - สกุล" name="full_name"
                                                        required></p>
                                                <p><input class="form-control" type="tel" placeholder="เบอร์โทร" name="phone"
                                                        required></p>
                                                <p>
                                                    <textarea class="form-control"  required name="address" id="bill" cols="30" rows="10"
                                                        placeholder="ที่อยู่"></textarea>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>สินค้าของคุณ</th>
                                    <th>ราคา</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>สินค้า</td>
                                    <td>รวม</td>
                                </tr>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                    @php
                                        $total += $cart->products->price;
                                    @endphp
                                    <tr>
                                        <td>{{ $cart->products->name }}</td>
                                        <td>{{ number_format($cart->product_qty *  $cart->products->price ,2)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>รวม</td>
                                    <td>฿{{ number_format($total, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>ค่าส่ง</td>
                                    <td>ฟรี</td>
                                </tr>
                                <tr>
                                    <td>รวมทั้งหมด</td>
                                    <td>฿{{ number_format($total, 2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-check mt-2">
                            <input onclick="$('#show_qrcode').addClass('d-none')" name="type_pay" value="0" id="my-input" class="form-check-input" type="radio" name="" value="true">
                            <label for="my-input" class="form-check-label">ปลายทาง</label>
                        </div>
                        <div class="form-check">
                            <input onclick="$('#show_qrcode').removeClass('d-none')" name="type_pay" value="1" id="my-input" class="form-check-input" type="radio" name="" value="true">
                            <label for="my-input" class="form-check-label">โอนชำระ</label>
                        </div>
                        <img id="show_qrcode" class=" d-none" width="100px" height="100px" src="https://www.qrcode-monkey.com/img/default-preview-qr.svg" alt="">
                        <button type="submit" class="btn btn-warning mt-4 d-block">ยืนยืนการชำระ</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end check out section -->
@endsection
