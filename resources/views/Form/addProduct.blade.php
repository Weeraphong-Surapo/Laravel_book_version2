@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>เพิ่มสินค้า</h1>
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
                    <form action="{{ url('admin/product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="my-input">รูปภาพ</label>
                                    <input id="my-input" class="form-control" type="file" name="img" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="my-input">ชื่อสินค้า</label>
                                    <input id="my-input" class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">ราคา</label>
                                    <input id="my-input" class="form-control w-100" type="number" name="price" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">จำนวนสต็อก</label>
                                    <input id="my-input" class="form-control w-100" type="number" name="stock" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="my-input">ประเภท</label>
                                    <select name="category" id="" class="form-control">
                                            <option value="" disabled selected>เลือกประเภท</option>
                                            @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100 mt-3">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
