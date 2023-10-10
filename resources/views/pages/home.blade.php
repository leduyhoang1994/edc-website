@extends('layouts.main')
@section('og-title')
Trang chủ
@endsection
@section('content')
<div class="home">
	<!-- banner slider -->
	<div class="banner w-100">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="position-absolute d-flex justify-content-start form-register edupia-container-lg banner-content">
				<div class="justify-content-end content-slide-item">
					<div>
						<p class="text-white text-font-size-50 text-font-weight-700 title-banner">Tiên phong trong lĩnh vực <br />
							Edtech tại Việt Nam</p>
						<p class="text-white text-font-size-18 text-font-weight-400 des-banner">
							Trong hơn 5 năm hình thành & phát triển, Edupia đã cho ra mắt các sản phẩm
							giáo dục trực tuyến thúc đẩy sự phát triển cho hàng triệu trẻ em Việt Nam.
						</p>
					</div>
				</div>
			</div>
			<ol class="carousel-indicators align-items-center dot-banner">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 img-slider-banner img-fluid"
						src="{{ asset('images/imgs/homepage/imgpsh_fullsize.png') }}" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-slider-banner"
						src="https://fastly.picsum.photos/id/2/1440/532.jpg?hmac=Fk--igIQyi6twk6odnElXoeWh4c1IA0j0DoIsyN6Nnk"
						alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-slider-banner"
						src="https://fastly.picsum.photos/id/1059/1440/532.jpg?hmac=KBBpfuBmwdYK-GtgG8BBxq4VZsCYQLx3o96hDb9BWLo"
						alt="Third slide">
				</div>
			</div>
		</div>
	</div>
	<!-- end banner slider -->
	<!-- section 2 -->
	<div class="section-2 edupia-container-lg">
		<div class="row w-75 m-auto">
			<div class="col-12-lg mx-auto mb-6">
				<p class="text-center text-font-size-36 text-font-weight-600">Edupia và những con số ấn tượng</p>
				<p class="text-center text-font-size-18 text-font-weight-400">Là sản phẩm tiên phong đi đầu, từ khi ra mắt đến
					nay EDUPIA đã đạt được những thành tựu ấn tượng
				</p>
			</div>
			<div class="col-12-lg mb-7 w-100 h-340 position-relative">
				<div class="item-achievement-1 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-1.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement text-font-family-inter">
							<p class="text-white text-font-size-20 line-height-normal d-flex align-items-baseline">
								<span class="text-font-size-50">5</span> <span class="ml-1">Triệu</span>
							</p>
							<p class="text-center text-white text-font-size-18 text-font-weight-500">Học sinh <br />theo học</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-2 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-2.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<p class="text-blue-400 line-height-normal d-flex align-items-baseline justify-content-center">
								<span class="text-font-size-55 text-font-weight-700">25</span> <span>nghìn</span>
							</p>
							<p class="text-blue-400 text-font-size-16 text-font-weight-500 white-space-nowrap text-center">Học sinh
								Online <br />hàng ngày</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-3 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-3.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<span class="text-blue-200 text-font-size-18 text-font-weight-500 d-block margin-left-4">Hơn</span>
							<p class="text-blue-200 d-flex align-items-baseline line-height-normal">
								<span class="text-font-size-55 text-font-weight-700 line-height-30">5</span><span>nghìn</span>
							</p>
							<p class="mt-2 text-center text-blue-200 text-font-size-16 text-font-weight-500 white-space-nowrap">Bài giảng <br />& Luyện
								tập</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-4 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-4.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<p class="text-white text-font-size-50 text-font-weight-600 line-height-normal text-center">
								<span>#1</span>
							</p>
							<p class="text-center text-white white-space-nowrap text-font-size-16 text-font-weight-500">Ed-Tech <br />tại Việt Nam</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-5 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-3.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<p class="text-blue-200 text-center  white-space-nowrap line-height-normal">
								<span class="text-font-size-55 text-font-weight-700">100</span>
								<span class="text-font-size-25">%</span>
							</p>
							<p class="text-center text-blue-200 text-font-size-16 text-font-weight-500">Bài học được <br />thiết kế
								riêng</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-6 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-5.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<p class="text-center text-white text-font-size-16 text-font-weight-500">Top</p>
							<p class="text-center text-white line-height-normal">
								<span class="text-font-size-65 line-height-55">5</span>
							</p>
							<p class="white-space-nowrap text-white text-font-size-16 text-font-weight-500 text-center">Ed-Tech
								<br />Đông Nam Á
							</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-7 position-absolute">
					<div class="position-relative">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/achievement-6.svg') }}" alt="achievement" />
						<div class="position-absolute txt-item-achievement">
							<p class="text-center text-white d-flex align-items-baseline justify-content-center line-height-normal">
								<span class="text-font-size-60 text-font-weight-700">95</span>
								<span class="text-font-size-45 text-font-weight-700">%</span>
							</p>
							<p class="text-center text-white white-space-nowrap text-font-size-16 text-font-weight-500">Học sinh cải
								thiện <br />điểm số</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 2 -->
	<!-- section 3 -->
	<div class="w-100 section-3">
		<div class="block-1 text-center">
			<div class="row m-auto">
				<div class="col-lg-12 mb-5">
					<div class="edupia-container-lg mb-5">
						<p class="text-center text-font-size-36 text-font-weight-600">Hệ sinh thái sản phẩm Edupia</p>
						<p class="text-center text-font-size-18 text-font-weight-400">
							Giáo viên chuyên nghiệp - Giáo dục truyền cảm hứng - Cá nhân hoá học tập
						</p>
					</div>
				</div>
				<div class="col-12-lg mx-auto mb-7">
					<div class="container">
						<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators align-items-center">
								<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row">
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-standard.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Standard</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao
															cho<br /> học sinh lớp 1 - lớp 9</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-pro.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Pro</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cùng giáo viên
															Việt Nam</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-native.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Native</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cao cấp 1:1
															cùng giáo viên bản ngữ</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row">
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-standard.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Standard</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao
															cho<br /> học sinh lớp 1 - lớp 9</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-pro.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Pro</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cùng giáo viên
															Việt Nam</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-native.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Native</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cao cấp 1:1
															cùng giáo viên bản ngữ</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row">
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-standard.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Standard</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao
															cho<br /> học sinh lớp 1 - lớp 9</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-pro.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Pro</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cùng giáo viên
															Việt Nam</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-native.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Native</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Gia sư tiếng Anh cao cấp 1:1
															cùng giáo viên bản ngữ</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 3 -->
	<!-- section 4 -->
	<div class="w-100 section-4">
		<div class="block-1 text-center">
			<div class="row m-auto">
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5">
						<p class="text-center text-font-size-36 text-font-weight-600">Lý do để EDUPIA luôn là lựa chọn hàng đầu
						</p>
					</div>
				</div>
				<div class="col-lg-12 px-0">
					<div class="pt-5">
						<ul class="nav nav-pills mb-3 justify-content-center gap-25" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
									type="button" role="tab" aria-controls="pills-home" aria-selected="true">
									Công nghệ trí tuệ nhân tạo
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
									type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
									Lựa chọn bởi chuyên gia
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact"
									type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
									Phương pháp học tập Happy Learning
								</button>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="text-left">
								<img class="img-fluid" src="{{ asset('images/icons/homepage/slide-arrow.svg') }}" alt="slide-arrow" />
							</div>
							<div class="bg-blue-100 pt-60">
								<div class="container">
									<div class="row">
										<div class="col-lg-6">
											<div class="">
												<img class="img-fluid" src="{{ asset('images/imgs/homepage/edupia-ai.png') }}"
													alt="edupia-ai" />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mt-5">
												<ul class="list-unstyled">
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Cải thiện rõ rệt kỹ năng năng giao tiếp</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Phát âm chuẩn xác</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Tương tác đa chiều</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">So sánh có giống với giọng đọc bản ngữ </span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Hơn 3 triệu phụ huynh đã tin tưởng</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="text-center">
								<img src="{{ asset('images/icons/homepage/slide-arrow.svg') }}" alt="slide-arrow" />
							</div>
							<div class="bg-blue-100 pt-60">
								<div class="container">
									<div class="row">
										<div class="col-lg-6">
											<div class="">
												<img class="img-fluid" src="{{ asset('images/imgs/homepage/edupia-ai.png') }}"
													alt="edupia ai" />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mt-5">
												<ul class="list-unstyled">
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Cải thiện rõ rệt kỹ năng năng giao tiếp</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Phát âm chuẩn xác</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Tương tác đa chiều</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">So sánh có giống với giọng đọc bản ngữ </span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Hơn 3 triệu phụ huynh đã tin tưởng</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="text-right">
								<img src="{{ asset('images/icons/homepage/slide-arrow.svg') }}" alt="slide-arrow" />
							</div>
							<div class="bg-blue-100 pt-60">
								<div class="container">
									<div class="row">
										<div class="col-lg-6">
											<div class="">
												<img class="img-fluid" src="{{ asset('images/imgs/homepage/edupia-ai.png') }}"
													alt="edupia-ai" />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mt-5">
												<ul class="list-unstyled">
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Cải thiện rõ rệt kỹ năng năng giao tiếp</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Phát âm chuẩn xác</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Tương tác đa chiều</span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">So sánh có giống với giọng đọc bản ngữ </span>
														</div>
													</li>
													<li class="mb-4-0">
														<div class="d-flex bg-gradient-choose gap-4 align-items-center">
															<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="5" cy="5" r="5" fill="white" />
															</svg>
															<span class="text-font-size-18 ml-1">Hơn 3 triệu phụ huynh đã tin tưởng</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 4 -->
	<!-- section 5 -->
	<div class="w-100 section-5 ">
		<div class="row m-auto bg-section-5">
			<div class="col-lg-12">
				<div class="edupia-container-lg mb-5 ">
					<p class="text-center text-font-size-36 text-font-weight-600">Chung tay vì Một Việt Nam giỏi Tiếng Anh</p>
					<p class="text-center text-font-size-18 text-font-weight-400">
						Với mục tiêu giúp 3.000.000+ trẻ em Việt Nam giỏi Tiếng Anh, Edupia không chỉ đơn thuần cung cấp các
						giải pháp giáo dục mà còn tạo ra sân chơi Tiếng Anh cho trẻ em trên toàn quốc.
					</p>
				</div>
			</div>
			<div class="col-lg-12 px-0">
				<div class="pt-5 mb-4 pb-4">
					<ul class="nav nav-pills mb-3 justify-content-center gap-25" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-home2-tab" data-toggle="pill" data-target="#pills-home2"
								type="button" role="tab" aria-controls="pills-home2" aria-selected="true">
								Tất cả
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-profile2-tab" data-toggle="pill" data-target="#pills-profile2"
								type="button" role="tab" aria-controls="pills-profile2" aria-selected="false">
								Hà Giang
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact1-tab" data-toggle="pill" data-target="#pills-contact1"
								type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">
								Yên Bái
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact2-tab" data-toggle="pill" data-target="#pills-contact2"
								type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">
								Tuyên Quang
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact3-tab" data-toggle="pill" data-target="#pills-contact3"
								type="button" role="tab" aria-controls="pills-contact3" aria-selected="false">
								Hoà Bình
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact4-tab" data-toggle="pill" data-target="#pills-contact4"
								type="button" role="tab" aria-controls="pills-contact4" aria-selected="false">
								Sơn La
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact5-tab" data-toggle="pill" data-target="#pills-contact5"
								type="button" role="tab" aria-controls="pills-contact5" aria-selected="false">
								Lai Châu
							</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact4-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact5-tab">
						<div class="demo-video position-relative" style="overflow: hidden;">
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee ">
								<div class="marquee-content slide-item-2">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
							<div class="marquee">
								<div class="marquee-content slide-item-1">
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="Vov1">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="DanTri">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto7.png') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto1.png') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto2.png') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto3.png') }}" alt="ZingNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto4.png') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto5.png') }}" alt="Cafef">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/imgs/homepage/slide-auto6.png') }}" alt="Vov1">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="text-center mt-5">
					<button class="btn btn-primary more-btn">Xem thêm cuộc thi</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 5 -->
	<!-- section 6 -->
	<div class="w-100 section-6 d-flex">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5 ">
						<p class="text-center text-font-size-36 text-font-weight-600">Giải thưởng</p>
						<p class="text-center text-font-size-18 text-font-weight-400">
							Những giải thưởng danh giá thêm một lần nữa khẳng định uy tín của EDUPIA trong hành trình phát triển
							của mình.
						</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5 ">
						<div class="container">
							<div class="row d-flex justify-content-center">
								<div class="col-md-12">
									<div class="wizard">
										<!-- tab giai thuong -->
										<div class="mb-5">
											<div class="tab-content" id="main_form">
												<div class="tab-pane active" role="tabpanel" id="step1">
													<div class="row">
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			The BrandLaureate SMEs BestBrands Award
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
																			giới
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0 " style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Best Online English Teaching Product
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Top 50 công ty Edtech nổi bật của Đông Nam Á
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step2">
													<div class="row">
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			The BrandLaureate SMEs BestBrands Award
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
																			giới
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0 " style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Best Online English Teaching Product
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Top 50 công ty Edtech nổi bật của Đông Nam Á
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step3">
													<div class="row">
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			The BrandLaureate SMEs BestBrands Award
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
																			giới
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0 " style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Best Online English Teaching Product
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Top 50 công ty Edtech nổi bật của Đông Nam Á
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step4">
													<div class="row">
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			The BrandLaureate SMEs BestBrands Award
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
																			giới
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0 " style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Best Online English Teaching Product
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Top 50 công ty Edtech nổi bật của Đông Nam Á
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step5">
													<div class="row">
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			The BrandLaureate SMEs BestBrands Award
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
																			giới
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0 " style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Best Online English Teaching Product
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
																		</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 px-39">
															<div>
																<div class="card border-0" style="width: 100%;">
																	<img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
																		alt="Card image cap">
																	<div class="card-body mt-5">
																		<h5
																			class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
																			Top 50 công ty Edtech nổi bật của Đông Nam Á
																		</h5>
																		<p class="card-text text-center text-font-size-18 text-font-weight-400">
																			Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<!-- tab giai thuong -->
										<div class="wizard-inner">
											<div class="connecting-line"></div>
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
														<span class="round-tab"></span>
														<i>2022</i>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
														<span class="round-tab"></span>
														<i>2021</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
														<span class="round-tab"></span>
														<i>2020</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab">
														<span class="round-tab"></span>
														<i>2019</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step4" data-toggle="tab" aria-controls="step5" role="tab">
														<span class="round-tab"></span>
														<i>2018</i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 6 -->
	<!-- section 7 -->
	<div class="section-7 w-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5 ">
						<p class="text-center text-font-size-36 text-font-weight-600">Truyền thông, báo chí nói về Edupia</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5 mt-5">
						<img class="img-fluid" src="{{ asset('images/imgs/homepage/edupia-ceo.png') }}" alt="edupia-ceo" />
					</div>
				</div>
				<div class="col-lg-12">
					<div class="edupia-container-lg mb-5 mt-5">
						<div class="d-flex gap-8 justify-content-center align-items-center">
							<img class="img-fluid" src="{{ asset('images/imgs/homepage/reporter.svg') }}" alt="reporter-ceo" />
							<p class="text-font-size-26 text-font-weight-600">[eMagazine] Sứ mệnh của những người kinh doanh tri thức
							</p>
						</div>
						<div class="my-5 py-5 text-center">
							<svg width="52" height="38" viewBox="0 0 52 38" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M27.7273 31.5407C26.2328 28.2583 25.8978 24.8896 26.7223 21.4345C28.2168 14.8699 32.0562 9.28412 38.2403 4.67733C42.6207 1.39499 47.2073 -0.159798 52 0.0129566L50.7632 5.5411C44.6821 6.98072 40.3017 10.551 37.6219 16.2519C37.8796 15.676 38.7556 15.6185 40.2501 16.0791C42.9815 16.8853 45.0686 18.5553 46.5116 21.089C47.9545 23.6803 48.3411 26.4732 47.6711 29.4676C46.9496 32.5772 45.3263 34.9094 42.8011 36.4642C40.2759 38.019 37.5703 38.3933 34.6844 37.5871C31.5924 36.7233 29.2733 34.7078 27.7273 31.5407ZM1.44468 31.5407C-0.0498167 28.2583 -0.384791 24.8896 0.439761 21.4345C1.93426 14.8699 5.77358 9.28412 11.9577 4.67733C16.3381 1.39499 20.9247 -0.159798 25.7174 0.0129566L24.4806 5.5411C18.3995 6.98072 14.0191 10.551 11.3393 16.2519C11.597 15.676 12.4731 15.6185 13.9676 16.0791C16.6989 16.8853 18.786 18.5553 20.229 21.089C21.672 23.6803 22.0585 26.4732 21.3885 29.4676C20.667 32.5772 19.0437 34.9094 16.5185 36.4642C13.9933 38.019 11.2878 38.3933 8.40184 37.5871C5.30977 36.7233 2.99072 34.7078 1.44468 31.5407Z"
									fill="#20BEC6" />
							</svg>
						</div>
						<div class="mb-5">
							<p class="text-center text-font-size-18 text-font-weight-500">
								Đã là startup thì chắc chắn sẽ có khó khăn, những ai đã từng khởi nghiệp thì đều phải loay hoay đi
								tìm
								cho mình nguồn vốn, câu chuyện nhân sự, cách thức triển khai kinh doanh, và luôn phải thay đổi với
								những
								biến động của thị trường. <br />
								Nhưng đối với doanh nghiệp giáo dục thứ kinh doanh không phải là hàng hoá bình thường mà chúng tôi
								kinh
								doanh tri thức, mục tiêu là mang giá trị cho mọi người.
							</p>
							<p class="mt-3 pt-3 text-font-size-20 text-font-weight-600 text-center">- CEO Trần Đức Hùng -</p>
						</div>
						<div class="mt-5 pt-5">
							<div class="marquee">
								<div class="marquee-content">
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
									</div>
									<div class="marquee-tag">
										<img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 7 -->
	<!-- section 8 -->
	<div class="section-8 w-100">
		<div class="container pb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="edupia-container-lg">
						<p class="text-center text-font-size-36 text-font-weight-600 mb-3">Tin tức sự kiện</p>
						<p class="text-center text-font-size-18 text-font-weight-400">
							Cùng theo dõi và cập nhật thông tin mới nhất về EDUPIA
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-3">
					<div class="mt-3">
						<div class="card border-0" style="width: 100%;">
							<img class="card-img-top" src="{{ asset('images/imgs/homepage/post-1.png') }}" alt="Card image cap">
							<div class="card-body px-0">
								<h5 class="card-title text-font-size-18 text-font-weight-600 text-left">EDUPIA ra mắt phiên bản mới -
									Thêm tính
									năng, tăng hiệu quả học tập</h5>
								<p class="text-font-size-16 text-font-weight-600 text-left">09/08/2023</p>
								<p class="card-text text-font-size-16 text-font-weight-400 text-justify">
									Theo đó, phiên bản mới của EDUPIA sẽ có nhiều ưu điểm vượt trội cả về nội dung bài học, các hoạt động
									bổ trợ lẫn cải tiến về kỹ thuật, giao diện, giúp việc tương tác và học tập của bé dễ dàng, hiệu quả
									hơn.
								</p>
								<div class="mt-5">
									<a href="#">
										<span class="text-font-size-16 text-black text-font-weight-400">Chi tiết</span>
										<svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.3536 4.35356C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464468C16.9763 0.269205 16.6597 0.269205 16.4645 0.464468C16.2692 0.65973 16.2692 0.976312 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53554C16.6597 7.7308 16.9763 7.7308 17.1716 7.53554L20.3536 4.35356ZM-4.37114e-08 4.5L20 4.5L20 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
												fill="black" />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="mt-3">
						<div class="card border-0" style="width: 100%;">
							<img class="card-img-top" src="{{ asset('images/imgs/homepage/post-2.png') }}" alt="Card image cap">
							<div class="card-body px-0">
								<h5 class="card-title text-font-size-18 text-font-weight-600 text-left">EDUPIA ra mắt phiên bản mới -
									Thêm tính
									năng, tăng hiệu quả học tập</h5>
								<p class="text-font-size-16 text-font-weight-600 text-left">09/08/2023</p>
								<p class="card-text text-font-size-16 text-font-weight-400 text-justify">
									Theo đó, phiên bản mới của EDUPIA sẽ có nhiều ưu điểm vượt trội cả về nội dung bài học, các hoạt động
									bổ trợ lẫn cải tiến về kỹ thuật, giao diện, giúp việc tương tác và học tập của bé dễ dàng, hiệu quả
									hơn.
								</p>
								<div class="mt-5">
									<a href="#">
										<span class="text-font-size-16 text-black text-font-weight-400">Chi tiết</span>
										<svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.3536 4.35356C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464468C16.9763 0.269205 16.6597 0.269205 16.4645 0.464468C16.2692 0.65973 16.2692 0.976312 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53554C16.6597 7.7308 16.9763 7.7308 17.1716 7.53554L20.3536 4.35356ZM-4.37114e-08 4.5L20 4.5L20 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
												fill="black" />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="mt-3">
						<div class="card border-0" style="width: 100%;">
							<img class="card-img-top" src="{{ asset('images/imgs/homepage/post-3.png') }}" alt="Card image cap">
							<div class="card-body px-0">
								<h5 class="card-title text-font-size-18 text-font-weight-600 text-left">EDUPIA ra mắt phiên bản mới -
									Thêm tính
									năng, tăng hiệu quả học tập</h5>
								<p class="text-font-size-16 text-font-weight-600 text-left">09/08/2023</p>
								<p class="card-text text-font-size-16 text-font-weight-400 text-justify">
									Theo đó, phiên bản mới của EDUPIA sẽ có nhiều ưu điểm vượt trội cả về nội dung bài học, các hoạt động
									bổ trợ lẫn cải tiến về kỹ thuật, giao diện, giúp việc tương tác và học tập của bé dễ dàng, hiệu quả
									hơn.
								</p>
								<div class="mt-5">
									<a href="#">
										<span class="text-font-size-16 text-black text-font-weight-400">Chi tiết</span>
										<svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.3536 4.35356C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464468C16.9763 0.269205 16.6597 0.269205 16.4645 0.464468C16.2692 0.65973 16.2692 0.976312 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53554C16.6597 7.7308 16.9763 7.7308 17.1716 7.53554L20.3536 4.35356ZM-4.37114e-08 4.5L20 4.5L20 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
												fill="black" />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="mt-3">
						<div class="card border-0" style="width: 100%;">
							<img class="card-img-top" src="{{ asset('images/imgs/homepage/post-4.png') }}" alt="Card image cap">
							<div class="card-body px-0">
								<h5 class="card-title text-font-size-18 text-font-weight-600 text-left">EDUPIA ra mắt phiên bản mới -
									Thêm tính
									năng, tăng hiệu quả học tập</h5>
								<p class="text-font-size-16 text-font-weight-600 text-left">09/08/2023</p>
								<p class="card-text text-font-size-16 text-font-weight-400 text-justify">
									Theo đó, phiên bản mới của EDUPIA sẽ có nhiều ưu điểm vượt trội cả về nội dung bài học, các hoạt động
									bổ trợ lẫn cải tiến về kỹ thuật, giao diện, giúp việc tương tác và học tập của bé dễ dàng, hiệu quả
									hơn.
								</p>
								<div class="mt-5">
									<a href="#">
										<span class="text-font-size-16 text-black text-font-weight-400">Chi tiết</span>
										<svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.3536 4.35356C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464468C16.9763 0.269205 16.6597 0.269205 16.4645 0.464468C16.2692 0.65973 16.2692 0.976312 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53554C16.6597 7.7308 16.9763 7.7308 17.1716 7.53554L20.3536 4.35356ZM-4.37114e-08 4.5L20 4.5L20 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
												fill="black" />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="text-center mt-5">
						<button class="btn btn-primary more-btn">Đọc thêm tin tức</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section 8 -->
</div>
@endsection


@section('script_links')
<script>
	$('.carousel').carousel({
		interval: false,
	});
	$(".carousel-indicators img").click(function () {
		$(".carousel-indicators img").attr('src', "{{ asset('images/icons/homepage/Dot.svg') }}");
		$(this).attr('src', "{{ asset('images/icons/homepage/IndicatorsActive.svg') }}");
	});

	$('.play-icon').click(function () {
		// Lấy video ID từ URL của video YouTube
		const videoId = 'zg6eSuOpJEQ';

		// Tạo thẻ iframe chứa video
		const iframe = $('<iframe></iframe>', {
			width: 970,
			height: 545,
			src: `https://www.youtube.com/embed/${videoId}?rel=0&autoplay=1&mute=1`,
			frameborder: 0,
			allowfullscreen: true,
			class: 'embed-responsive-item',
			preload: 'metadata',
			css: {
				'border-radius': '12px'

			}
		});

		// Ẩn hình ảnh thumbnail và thay thế bằng iframe chứa video
		$('#thumbnail').hide();
		$('#videoContainer').html(iframe);
	});
</script>
@endsection