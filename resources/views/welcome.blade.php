@extends('layouts')
@section('content')
    	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">ยินดีต้อนรับเข้าสู่เว็บไซต์</p>
							<h1>ขายหนังสือออยไลน์</h1>
							<div class="hero-btns">
								<a href="{{url('allproduct')}}" class="boxed-btn">เลือกซื้อสินค้าเลย</a>
								<a href="{{url('register')}}" class="bordered-btn">สมัครสมาชิก</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>ส่งฟรี</h3>
							<p>ไม่มีขั้นต่ำ</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>ให้บริการซัพพอร์ต</h3>
							<p>ตลอด 24 ชั่วโมง</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>ไม่พอใจยินดีคืนเงิน</h3>
							<p>ภายใน 3 วัน</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">เกี่ยวกับ</span> เรา</h3>
						
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end product section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="https://www.myaccount-cloud.com/upload/8567/54K4AQRvqq.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>เราให้บริการมาแล้วมากกว่า 1 วัน <span>การันตี</span></h3>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="https://reg10.pwa.co.th/pwa/assets/img/vote-icon/emotion-3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>มีความพึงพอใจที่ระดับดี <span>ผลจากการสำรวจ</span></h3>

								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="https://website-assets-fd.freshworks.com/attachments/ckjv6jx7700lscjfzuyspsnv0-customer-service-team-training.one-half.png" alt="">
							</div>
							<div class="client-meta">
								<h3>มีความปลอดภัยใช้งานง่าย <span>ติดต่อเราได้ 24 ชั่วโมง</span></h3>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
@endsection