@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>สมัครสมาชิก</h1>
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
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                    <form action="{{ url('registerpost') }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="my-input">ชื่อผู้ใช้</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">อีเมล</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">รหัสผ่าน</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">ยืนยันรหัสผ่าน</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100 mt-3">สมัคร</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
