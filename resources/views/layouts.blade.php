<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>เว็บไซต์ขายหนังสือ</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="/assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="/">
                                <img src="/assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>

                                @if (Auth::check())
                                    @if (Auth::user()->admin)
                                        <li><a href="{{ url('admin/product') }}">จัดการสินค้า</a></li>
                                        <li><a href="{{ url('admin/category') }}">จัดการหมวดหมู่</a></li>
                                        <li><a href="{{ url('admin/order') }}">จัดการออเดอร์</a></li>
                                        <li><a href="{{ url('admin/reportall') }}">รายงานระบบ</a></li>
                                    @endif
                                @endif
                                @if (!Auth::check() || !Auth::user()->admin)
                                    <li class="current-list-item"><a href="{{ url('/') }}">หน้าหลัก</a>
                                    <li><a href="{{ url('allproduct') }}">หนังสือ</a>
                                    </li>
                                    <li><a href="#">หมวดหมู่</a>
                                        <ul class="sub-menu">
                                            <div id="result_list"></div>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('history') }}">ประวัติการซื้อ</a></li>
                                @endif


                               
                                @if (!Auth::check())
                                    <li><a href="{{ url('login') }}">เข้าสู่ระบบ</a></li>
                                    <li><a href="{{ url('register') }}">สมัครสมาชิก</a></li>
                                @endif

                                <li>
                                    @if (Auth::check())
                                        @if (!Auth::user()->admin)
                                            <div class="header-icons">
                                                <a class="shopping-cart" href="{{ url('cart') }}"><i
                                                        class="fas fa-shopping-cart"></i></a>
                                        @endif
                                    @endif
                                    <a class="mobile-hide search-bar-icon" href="{{ url('user') }}"><i
                                            class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                    </li>
                    </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end header -->



    @yield('content')


    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="/assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="/assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="/assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="/assets/js/main.js"></script>
    <script>
        $(function() {
            $.ajax({
                url: "getcategory",
                method: 'get',
                success: function(res) {
                    let content = "";
                    res.forEach(element => {
                        content += `<li><a href="allproduct?s=${element.id}">${element.name}</a></li>`;
                    });
                    $('#result_list').html(content)
                }
            })
        })
    </script>
</body>

</html>
