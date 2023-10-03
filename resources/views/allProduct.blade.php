@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>หนังสือทั้งหมด</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- product section -->
    <div class="product-section mt-5 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">เลือกซื้อ</span> ให้สนุก</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center">
                        <form action="{{ url('cart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <img src="{{ asset($product->img) }}" alt="">
                                </div>
                                <h3>{{ $product->name }}</h3>
                                <p class="product-price">฿ {{ number_format($product->price,2) }}</p>
                                <button type="submit" class="btn cart-btn"><i class="fas fa-shopping-cart"></i>
                                    เพิ่มลงตะกร้า</button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product section -->
@endsection
