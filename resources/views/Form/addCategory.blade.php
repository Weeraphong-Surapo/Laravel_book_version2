@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>เพิ่มหวมดหมู่</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- category -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="my-input">ชื่อหมวดหมู่</label>
                                    <input id="my-input" class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100 mt-3">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
