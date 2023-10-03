@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>แก้ไขสินค้า</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- product -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <p class="text-center">รูปสินค้า</p>
                    <div class="d-flex justify-content-center">
                        <img width="120" height="100" src="{{asset($product->img)}}" alt="" style="object-fit: cover;">
                    </div>
                    <hr>
                    <form action="{{url('admin/product',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="my-input">เปลี่ยนรูปภาพ</label>
                                    <input id="my-input" class="form-control" type="file" name="img">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="my-input">ชื่อสินค้า</label>
                                    <input id="my-input" class="form-control" type="text" name="name" value="{{$product->name}}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">ราคา</label>
                                    <input id="my-input" class="form-control w-100" type="number" name="price" value="{{$product->price}}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">จำนวนสต็อก</label>
                                    <input id="my-input" class="form-control w-100" type="number" name="stock" value="{{$product->stock}}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">ประเภท</label>
                                    <select name="category" id="" class="form-control">
                                            <option value="" disabled selected>เลือกประเภท</option>
                                            @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100 mt-3">อัพเดต</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
