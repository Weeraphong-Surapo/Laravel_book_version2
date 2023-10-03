@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>ข้อมูลส่วนตัว</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="product-section mt-5 mb-150">
        <div class="container">
            <div class="row ">
                <div class="card w-100">
                    <div class="card-body">
                        <p>ชื่อผู้ใช้ : <b>{{ Auth::user()->name }}</b></p>
                        <p>อีเมล : <b>{{ Auth::user()->email }}</b></p>
                        <p>รหัสผ่าน : <b>xxxxxxxx</b></p>
                        <form action="{{ url('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">ออกจากระบบ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
