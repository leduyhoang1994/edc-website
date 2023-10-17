@extends('layouts.main')
@section('og-title')
About us
@endsection
@section('content')
<div class="about-us">
	<!-- banner -->
	<section class="about-us-banner">
		<div class="position-relative w-100">
			<img class="img-fluid" src="{{ asset('images/imgs/aboutus/about-banner.png') }}" alt="banner about" />
			<div class="title-about-us  position-absolute">
				<h1 class="text-white text-font-size-36 text-font-weight-700">Về chúng tôi</h1>
			</div>
		</div>
	</section>
	<section class="about-content py-5">
		<div class="container">
			<div class="edupia-container-lg">
				<div class="row about-item-1">
					<div class="col-lg-6">
						<div>
							<h1 class="text-font-size-36 text-font-weight-700 title-about">Giới thiệu chung</h1>
							<p class="text-font-size-18 text-font-weight-400 text-justify mb-0">Bắt nguồn từ mong muốn mang chất lượng
								dạy
								Tiếng Anh tại Trường Quốc tế đến với mọi học sinh Việt Nam,
								để các bạn nhỏ dù không có điều kiện kinh tế theo học tại các Trường Quốc Tế hay Trung Tâm đắt tiền vẫn
								có thể sử dụng Tiếng Anh tốt như người bản ngữ. Đây chính là hành trang chuẩn bị cho các em tương lai
								vươn ra thế giới. Chính vì lý do trên, đội ngũ sáng lập đã bắt tay vào xây dựng sản phẩm đầu tiên có tên
								“Chương trình học Tiếng Anh Online EDUPIA”.
							</p>
							<button class="btn btn-primary more-btn btn-about">Tìm hiểu thêm</button>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="div-left-about img-padding-top">
							<div class="item-about-content">
								<img class="img-fluid" src="{{ asset('images/imgs/aboutus/about-content-1.png') }}" alt="item 1" />
							</div>
						</div>
					</div>
				</div>
				<div class="row about-item-2">
					<div class="col-lg-6">
						<div class="div-right-about">
							<div class="item-about-content">
								<img class="img-fluid h-345" src="{{ asset('images/imgs/aboutus/about-content-2.png') }}"
									alt="item 2" />
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div>
							<h1 class="text-font-size-30 text-font-weight-600 about-item-2-title">Tầm nhìn</h1>
							<p class="text-font-size-20 text-font-weight-600">Edtech hàng đầu Đông Nam Á với doanh thu 100 triệu USD
								vào năm 2026</p>
							<p class="text-font-size-18 text-font-weight-400 text-justify">Thông qua việc áp dụng thông minh và thực
								tế công nghệ tiên tiến để mang lại giải pháp học ngôn ngữ tiêu chuẩn với chi phí thấp nhất, chúng tôi
								hướng đến việc trở thành doanh nghiệp dẫn đầu về số lượng khách hàng sử dụng các dịch vụ, ứng dụng ngoại
								ngữ tại Việt Nam, Top 10 doanh nghiệp có số lượng sử dụng dịch vụ học ngoại ngữ trên toàn thế giới.
							</p>
						</div>
					</div>
				</div>
				<div class="row about-item-3">
					<div class="col-lg-6">
						<div>
							<h1 class="text-font-size-30 text-font-weight-600 title-item-3">Sứ mệnh</h1>
							<p class="text-font-size-18 text-font-weight-400 text-justify">Thông qua việc sử dụng công nghệ để mang
								chất lượng giáo dục từ trường quốc tế đến mọi học sinh, chúng
								tôi tin rằng ngoại ngữ là một trong những con đường nhanh nhất để mọi công dân có thể tiếp cận các tri
								thức của thế giới, nâng cao dân trí, từ đó thúc đẩy xã hội phát triển tốt đẹp hơn.
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="div-left-about">
							<div class="item-about-content">
								<img class="img-fluid h-345" src="{{ asset('images/imgs/aboutus/about-content-3.png') }}"
									alt="item 3" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-trip py-5">
		<div class="container">
			<div class="edupia-container-lg">
				<p class="text-center text-black text-font-size-36 text-font-weight-600">Hành trình của ước mơ</p>
			</div>
		</div>
		<div class="px-4">
			<div class="trip-content">
				<div class="wizard">
					<div class="wizard-inner">
						<div class="connecting-line"></div>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
									<div class="img-item-trip-1 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-1.svg') }}" alt="trip 1" />
									</div>
									<div class="item-bottom-1 text-center">
										<p class="text-font-size-18 text-font-weight-600">2018</p>
										<p class="text-font-size-18 text-font-weight-600 item-bottom-1-title">Ra mắt Edupia Tiểu Học</p>
										<p class="text-font-size-16 text-font-weight-400 item-bottom-1-description">Chương trình Tiếng Anh Online dành cho học sinh từ
											lớp 1 - lớp 5 và đạt
											Giải thưởng ứng dụng công nghệ số trong lĩnh vực Giáo Dục & Đào Tạo, tại Vietnam Digital Awards
											2018</p>
									</div>
								</a>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
									<div class="img-item-trip-2 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-2.svg') }}" alt="trip 1" />
									</div>
									<div class="item-bottom-2 text-center trip-2-thcs">
										<p class="text-font-size-18 text-font-weight-600 item-bottom-2-title">Ra mắt Edupia THCS</p>
										<p class="text-font-size-16 text-font-weight-400 item-bottom-2-description">
											Chương trình Tiếng Anh Online dành cho học sinh từ lớp 6 - lớp 9 và Vinh dự nhận giải thưởng Top
											50 Thương hiệu Vàng ASEAN
										</p>
										<p class="text-font-size-18 text-font-weight-600">2019</p>

									</div>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
									<div class="img-item-trip-1 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-3.svg') }}" alt="trip 1" />
									</div>
									<div class="item-bottom-1 text-center">
										<p class="text-font-size-18 text-font-weight-600">2020</p>
										<p class="text-font-size-18 text-font-weight-600 item-bottom-1-title">Ra mắt Edupia Tiểu Học</p>
										<p class="text-font-size-16 text-font-weight-400">Chương trình Tiếng Anh Online dành cho học sinh từ
											lớp 1 - lớp 5 và đạt
											Giải thưởng ứng dụng công nghệ số trong lĩnh vực Giáo Dục & Đào Tạo, tại Vietnam Digital Awards
											2018</p>
									</div>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
									<div class="img-item-trip-2 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-4.svg') }}" alt="trip 1" />
									</div>
									<div class="item-bottom-2 text-center">
										<p class="text-font-size-18 text-font-weight-600 item-bottom-2-title">Ra đời Edupia Tutor</p>
										<p class="text-font-size-16 text-font-weight-400 item-bottom-2-description">Top 10 Giải thưởng Tin Dùng Việt Nam hạng mục
											Sản phẩm - Dịch vụ triển vọng tương lai của Việt Nam. Top 50 Startup Hứa Hẹn Nhất được đánh giá
											bởi Techinasia
										</p>
										<p class="text-font-size-18 text-font-weight-600">2021</p>
									</div>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab">
									<div class="img-item-trip-1 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-5.svg') }}" alt="trip 1" />
									</div>
									<div class="item-bottom-1 text-center">
										<p class="text-font-size-18 text-font-weight-600">2022</p>
										<p class="text-font-size-18 text-font-weight-600 item-bottom-1-title">Ra đời Edupia IELTS,
											Edupia Math </p>
										<p class="text-font-size-16 text-font-weight-400">Giải thưởng Best Online English Teaching Product
											thuộc mảng Giáo Dục. Top 50 - Edtech hạng mục Language Learning nổi bật nhất Đông Nam Á bởi
											HolonIQ</p>
									</div>
							</li>
							<li role="presentation" class="disabled">
								<a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" aria-expanded="false">
									<div class="img-item-trip-2 position-absolute">
										<img src="{{ asset('images/imgs/aboutus/trip-6.svg') }}" alt="trip 6" />
									</div>
									<div class="item-bottom-2 text-center">
										<p class="text-font-size-18 text-font-weight-600 item-bottom-2-title">Ra mắt Edupia Business và Edupia Academy</p>
										<p class="text-font-size-16 text-font-weight-400 item-bottom-2-description">Tháng 8/2023 Edupia ra mắt sản phẩm Edupia
											Business - Giải pháp toàn diện Tiếng Anh cho Doanh nghiệp. Đồng thời cho ra mắt Edupia Academy
										</p>
										<p class="text-font-size-18 text-font-weight-600">2023</p>
									</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-team py-5">
		<div class="container">
			<div class="edupia-container-lg">
				<div>
					<p class="text-blue-primary text-font-size-36 text-font-weight-600 text-center">Đội ngũ làm việc tâm huyết
						Edupia</p>
				</div>
				<div class="mt-5">
					<div class="row">
						<div class="col-lg-3">
							<div class="card border-0" style="width: 100%;">
								<img class="card-img" src="{{ asset('images/imgs/aboutus/avt-ceo.png') }}" alt="Card image cap">
								<div class="card-body pl-0 pr-0">
									<h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
										<span class="text-font-weight-400">Ông</span> Trần Đức Hùng
									</h5>
									<p class="text-black text-center text-font-size-18 text-font-weight-400 des-card-team">CEO - Co founder</p>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
											Giám đốc khối Digital của Viettel Telecom.</span>
									</div>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
											lĩnh vực viễn thông và nội dung số.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0" style="width: 100%;">
								<img class="card-img" src="{{ asset('images/imgs/aboutus/avt-cayman.png') }}" alt="Card image cap">
								<div class="card-body pl-0 pr-0">
									<h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
										<span class="text-font-weight-400">Thầy</span> Adam Lewis
									</h5>
									<p class="text-black text-center text-font-size-18 text-font-weight-400 des-card-team">Giám đốc phát triển nội dung
									</p>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
											Giám đốc khối Digital của Viettel Telecom.</span>
									</div>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
											lĩnh vực viễn thông và nội dung số.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0" style="width: 100%;">
								<img class="card-img" src="{{ asset('images/imgs/aboutus/avt-miller.png') }}" alt="Card image cap">
								<div class="card-body pl-0 pr-0">
									<h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
										<span class="text-font-weight-400">Cô</span> Jessica Miller
									</h5>
									<p class="text-black text-center text-font-size-18 text-font-weight-400 des-card-team">Cố vấn sư phạm</p>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
											Giám đốc khối Digital của Viettel Telecom.</span>
									</div>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
											lĩnh vực viễn thông và nội dung số.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0" style="width: 100%;">
								<img class="card-img" src="{{ asset('images/imgs/aboutus/avt-adam.png') }}" alt="Card image cap">
								<div class="card-body pl-0 pr-0">
									<h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
										<span class="text-font-weight-400">Cô</span> Cayman Fitzhugh
									</h5>
									<p class="text-black text-center text-font-size-18 text-font-weight-400 des-card-team">Cô vấn sư phạm</p>
									<div class="card-text d-flex text-left item-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
											Giám đốc khối Digital của Viettel Telecom.</span>
									</div>
									<div class="card-text d-flex text-leftitem-about-team">
										<div>
											<i class="dot"></i>
										</div>
										<span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
											lĩnh vực viễn thông và nội dung số.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-register">
		<div class="container">
			<div class="edupia-container-lg">
				<div class="bg-blue-primary about-register-content">
					<div class="row">
						<div class="col-lg-6 about-register-content-1">
							<div>
								<p class="text-white text-font-size-26 text-font-weight-600 mb-4">Đặc biệt! Tặng 100 ba mẹ đăng ký đầu
									tiên bộ quà trị giá 2 triệu
								</p>
								<form>
									<div class="form-group">
										<input class="form-control input-customer" type="text" placeholder="Họ tên phụ huynh" />
									</div>
									<div class="form-group">
										<input class="form-control input-customer" type="number" placeholder="Số điện thoại" />
									</div>
									<div class="form-group">
										<input class="form-control input-customer" type="number" placeholder="Bé học lớp mấy?" />
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký ngay</button>
									</div>
								</form>
							</div>

						</div>
						<div class="col-lg-6 about-register-content-2">
							<div class="text-center div-img">
								<img class="img-fluid" src="{{ asset('images/imgs/aboutus/img-register.png') }}" alt="img register" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('script_links')
@endsection