@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>เข้าสู่ระบบ</h1>
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
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger w-100" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12 col-12">
                    <form action="{{ url('loginpost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="my-input">อีเมล</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">รหัสผ่าน</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100 mt-3">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
