@extends('layouts.main')
@section('og-title')
Trang chủ
@endsection
@section('content')
<div class="home">
	<div class="banner w-100">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-indicators justify-content-start form-register edupia-container-lg ">
				<div class="justify-content-end content-slide-item">
					<div>
						<p class="text-white text-font-size-50 text-font-weight-700 title-banner">Tiên phong trong lĩnh vực <br />
							Edtech tại Việt Nam</p>
						<p class="text-white text-font-size-18 text-font-weight-400">
							Trong hơn 5 năm hình thành & phát triển, Edupia đã cho ra mắt các sản phẩm
							giáo dục trực tuyến thúc đẩy sự phát triển cho hàng triệu trẻ em Việt Nam.
						</p>
					</div>
				</div>
			</div>
			<ol class="carousel-indicators justify-content-center edupia-container-lg py-5">
				<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="{{ asset('images/imgs/homepage/imgpsh_fullsize.png') }}" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100"
						src="https://fastly.picsum.photos/id/2/1440/532.jpg?hmac=Fk--igIQyi6twk6odnElXoeWh4c1IA0j0DoIsyN6Nnk"
						alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100"
						src="https://fastly.picsum.photos/id/1059/1440/532.jpg?hmac=KBBpfuBmwdYK-GtgG8BBxq4VZsCYQLx3o96hDb9BWLo"
						alt="Third slide">
				</div>
			</div>
		</div>
	</div>
	<!-- section chicken-pea -->
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
						<svg width="181" height="160" viewBox="0 0 181 160" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M127.443 0H53.1039C47.7751 0 42.8464 2.82705 40.1561 7.42675L2.41578 71.9504C-0.313073 76.6159 -0.320951 82.3887 2.39517 87.0616L40.1627 152.038C42.8478 156.658 47.7877 159.5 53.1311 159.5H127.415C132.734 159.5 137.655 156.684 140.349 152.098L178.522 87.1221C181.285 82.4187 181.277 76.586 178.501 71.8902L140.355 7.36632C137.656 2.80079 132.746 0 127.443 0Z"
								fill="#40B8D5" />
						</svg>
						<div class="position-absolute txt-item-achievement">
							<p class="text-white text-font-size-20 line-height-normal d-flex align-items-baseline">
								<span class="text-font-size-50">5</span> <span class="ml-1">Triệu</span>
							</p>
							<p class="text-white text-font-size-18 text-font-weight-500">Học sinh <br />theo học</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-2 position-absolute">
					<div class="position-relative">
						<svg width="185" height="164" viewBox="0 0 185 164" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M129.443 2H55.1039C49.7751 2 44.8464 4.82705 42.1561 9.42675L4.41578 73.9504C1.68693 78.6159 1.67905 84.3887 4.39517 89.0616L42.1627 154.038C44.8478 158.658 49.7877 161.5 55.1311 161.5H129.415C134.734 161.5 139.655 158.684 142.349 154.098L180.522 89.1221C183.285 84.4187 183.277 78.586 180.501 73.8902L142.355 9.36632C139.656 4.80079 134.746 2 129.443 2Z"
								stroke="#40B8D5" stroke-width="4" />
						</svg>
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
						<svg width="185" height="164" viewBox="0 0 185 164" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M129.443 2H55.1039C49.7751 2 44.8464 4.82705 42.1561 9.42675L4.41578 73.9504C1.68693 78.6159 1.67905 84.3887 4.39517 89.0616L42.1627 154.038C44.8478 158.658 49.7877 161.5 55.1311 161.5H129.415C134.734 161.5 139.655 158.684 142.349 154.098L180.522 89.1221C183.285 84.4187 183.277 78.586 180.501 73.8902L142.355 9.36632C139.656 4.80079 134.746 2 129.443 2Z"
								stroke="#2581BA" stroke-width="4" />
						</svg>

						<div class="position-absolute txt-item-achievement">
							<span class="text-blue-200 text-font-size-18 text-font-weight-500 d-block margin-left-4">Hơn</span>
							<p class="text-blue-200 d-flex align-items-baseline line-height-normal">
								<span class="text-font-size-55 text-font-weight-700 line-height-30">5</span><span>nghìn</span>
							</p>
							<p class="mt-2 text-center text-blue-200 text-font-size-16 text-font-weight-500">Bài giảng <br />& Luyện
								tập</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-4 position-absolute">
					<div class="position-relative">
						<svg width="181" height="160" viewBox="0 0 181 160" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M127.443 0H53.1039C47.7751 0 42.8464 2.82705 40.1561 7.42675L2.41578 71.9504C-0.313073 76.6159 -0.320951 82.3887 2.39517 87.0616L40.1627 152.038C42.8478 156.658 47.7877 159.5 53.1311 159.5H127.415C132.734 159.5 137.655 156.684 140.349 152.098L178.522 87.1221C181.285 82.4187 181.277 76.586 178.501 71.8902L140.355 7.36632C137.656 2.80079 132.746 0 127.443 0Z"
								fill="#3DD9D8" />
						</svg>
						<div class="position-absolute txt-item-achievement">
							<p class="text-white text-font-size-50 text-font-weight-600 line-height-normal text-center">
								<span>#1</span>
							</p>
							<p class="text-center text-white white-space-nowrap">Ed-Tech <br />tại Việt Nam</p>
						</div>
					</div>
				</div>
				<div class="item-achievement-5 position-absolute">
					<div class="position-relative">
						<svg width="185" height="164" viewBox="0 0 185 164" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M129.443 2H55.1039C49.7751 2 44.8464 4.82705 42.1561 9.42675L4.41578 73.9504C1.68693 78.6159 1.67905 84.3887 4.39517 89.0616L42.1627 154.038C44.8478 158.658 49.7877 161.5 55.1311 161.5H129.415C134.734 161.5 139.655 158.684 142.349 154.098L180.522 89.1221C183.285 84.4187 183.277 78.586 180.501 73.8902L142.355 9.36632C139.656 4.80079 134.746 2 129.443 2Z"
								stroke="#2581BA" stroke-width="4" />
						</svg>
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
						<svg width="181" height="160" viewBox="0 0 181 160" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M127.443 0H53.1039C47.7751 0 42.8464 2.82705 40.1561 7.42675L2.41578 71.9504C-0.313073 76.6159 -0.320951 82.3887 2.39517 87.0616L40.1627 152.038C42.8478 156.658 47.7877 159.5 53.1311 159.5H127.415C132.734 159.5 137.655 156.684 140.349 152.098L178.522 87.1221C181.285 82.4187 181.277 76.586 178.501 71.8902L140.355 7.36632C137.656 2.80079 132.746 0 127.443 0Z"
								fill="#40C1C8" />
						</svg>
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
						<svg width="181" height="160" viewBox="0 0 181 160" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M127.443 0H53.1039C47.7751 0 42.8464 2.82705 40.1561 7.42675L2.41578 71.9504C-0.313073 76.6159 -0.320951 82.3887 2.39517 87.0616L40.1627 152.038C42.8478 156.658 47.7877 159.5 53.1311 159.5H127.415C132.734 159.5 137.655 156.684 140.349 152.098L178.522 87.1221C181.285 82.4187 181.277 76.586 178.501 71.8902L140.355 7.36632C137.656 2.80079 132.746 0 127.443 0Z"
								fill="#0D5B8F" />
						</svg>
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
	<!-- section 3 -->
	<div class="w-100 section-3">
		<div class="block-1 text-center">
			<div class="row m-auto">
				<div class="col-lg-12 mb-5">
					<div class="edupia-container-lg">
						<p class="text-center text-font-size-36 text-font-weight-600">Hệ sinh thái sản phẩm Edupia</p>
						<p class="text-center text-font-size-18 text-font-weight-400">
							Giáo viên chuyên nghiệp - Giáo dục truyền cảm hứng - Cá nhân hoá học tập
						</p>
					</div>
				</div>
				<div class="col-12-lg mx-auto mb-7">
					<div class="container">
						<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
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
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao cho<br /> học sinh lớp 1  -  lớp 9</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-standard.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Standard</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao cho<br /> học sinh lớp 1  -  lớp 9</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<div class="card border-0" style="width: 100%;">
													<img class="card-img-top" src="{{ asset('images/imgs/homepage/edupia-standard.png') }}"
														alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-font-size-28 text-font-weight-700">Edupia Standard</h5>
														<p class="card-text text-font-size-20 text-font-weight-400">Tiếng Anh online chất lượng cao cho<br /> học sinh lớp 1  -  lớp 9</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100"
										src="https://fastly.picsum.photos/id/2/1440/532.jpg?hmac=Fk--igIQyi6twk6odnElXoeWh4c1IA0j0DoIsyN6Nnk"
										alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100"
										src="https://fastly.picsum.photos/id/2/1440/532.jpg?hmac=Fk--igIQyi6twk6odnElXoeWh4c1IA0j0DoIsyN6Nnk"
										alt="Third slide">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- section 4 -->
	<div class="w-100 section-4">
		<div class="edupia-container-lg">
			<div class="block-1 text-center">
				<div class="row m-auto">
					<div class="col-lg-7 desc-1 text-blue-600 text-left">
						<p>Lần đầu tiên điểm yếu về phát âm và thiếu tự tin</p>
						<p>trong giao tiếp của học sinh Việt Nam được giái quyết</p>
						<p> triệt để</p>
					</div>
					<div class="col-lg-2">
						<img class="drawn-arrows" src="{{ asset('images/icons/homepage/DrawnArrowsLeft.svg') }}"
							alt="drawn-arrows-1">
					</div>

					<div class="col-lg-3">
						<div class="img-frame position-relative">
							<img class="frame" src="{{ asset('images/imgs/homepage/border-home-section-4-1.png') }}"
								alt="border-home-section-4-1">
							<img class="picture" src="{{ asset('images/imgs/homepage/home-section-4-1.png') }}"
								alt="home-section-4-1">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- section 5 -->
	<div class="w-100 section-5 ">
		<div class="edupia-container-lg">
			<div class="block-1 text-center">
				<div class="row m-auto">

					<div class="col-lg-7">
						<div class="img-frame position-relative">
							<img class="frame" src="{{ asset('images/imgs/homepage/border-home-section-5-1.png') }}"
								alt="border-home-section-5-1">
							<img class="picture" src="{{ asset('images/imgs/homepage/home-section-5-1.png') }}"
								alt="home-section-5-1">
						</div>
					</div>
					<div class="col-lg-5 desc-1 text-blue-600 text-left">
						<p>Bố mẹ dù không biết tiếng Anh cũng</p>
						<p>hoàn toàn yên tâm vì luôn có đội ngũ</p>
						<p>giáo viên theo sát hỗ trợ</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- section 6 -->
	<div class="w-100 section-6 d-flex">
		<div class="block-1 bg-navy-blue">
			<div class="big-text text-white text-center mb-5">
				<p class="d-inline-grid">
					EDUPIA
					<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
				</p>
				<p>Và</p>
				<p>Những Con Số</p>
				<p>Ấn Tượng</p>
			</div>
			<div class="small-title text-white text-center">
				<p>Là sản phẩm tiên phong đi đầu,</p>
				<p>từ khi ra mắt đến nay EDUPIA đã đạt được</p>
				<p>những thành tựu ấn tượng</p>
			</div>
		</div>
		<div class="block-2 text-center bg-goldenrod">
			<img src="{{ asset('images/imgs/homepage/home-section-6-1.png') }}" alt="AnimationLine">
			<p class="big-text text-white mb-5">
				5.000.000+
			</p>
			<div class="small-title text-white text-center">
				<p>học viên trên toàn quốc</p>
			</div>
		</div>
		<div class="block-3 text-center bg-dodger-blue">
			<img src="{{ asset('images/imgs/homepage/home-section-6-1.png') }}" alt="AnimationLine">
			<p class="big-text text-white mb-5">
				25.000+
			</p>
			<div class="small-title text-white text-center">
				<p>học viên online hàng ngày</p>
			</div>
		</div>
		<div class="block-4 text-center bg-coral">
			<img src="{{ asset('images/imgs/homepage/home-section-6-1.png') }}" alt="AnimationLine">
			<p class="big-text text-white mb-5">
				95%
			</p>
			<div class="small-title text-white text-center">
				<p>cải thiện điểm số</p>
			</div>
		</div>
	</div>
	<!-- section 7 -->
	<div class="section-7 edupia-container-lg">
		<div class="row w-75 m-auto">
			<div class="col-12-lg mx-auto mb-5 text-font-size-40">
				<span class="text-blue-600">Hệ Sinh Thái Sản Phẩm</span>
				<span class="text-blue-500 d-inline-grid edupia-liner">
					EDUPIA
					<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
				</span>
			</div>
			<div class="col-12-lg mx-auto mb-5">
				<span class="small-title blue-900 d-block text-center">Các sản phẩm của EDUPIA được thiết kế riêng dành
					cho những nhu cầu học tập và đối tượng</span>
				<span class="small-title blue-900 d-block text-center"> khác nhau, nhằm truyển tải những giá trị và
					hiệu quả tốt nhất cho người học</span>
			</div>
		</div>
		<div class="row justify-content-between mb-4-0 mx-auto">
			<div
				class="item-eco col-6-lg bg-dodger-blue edupia-border-radius-44 eco-item pt-5 pb-3-2 px-5 d-flex position-relative">
				<div class="text-font-size-18 text-font-weight-600">
					<img class="mb-5" src="{{ asset('images/icons/homepage/EdupiaSecond.svg') }}" alt="EdupiaSecond">
					<p class="text-white line-height-28 mb-0">EDUPIA THCS - chương trình tiếng Anh</p>
					<p class="text-white line-height-28 mb-0">dành cho học sinh từ lớp 6 - lớp 9.</p>
					<p class="text-white line-height-28 mb-0">Chắp cánh tương lai cho con</p>
					<div class="btn-discover mt-6 ml-6">
						<p class="text">KHÁM PHÁ</p>
					</div>
				</div>
				<img class="edupia-img-second position-absolute" src="{{ asset('images/imgs/homepage/edupia-second-img.png') }}"
					alt="edupia-second-img">
			</div>
			<div
				class="item-eco col-6-lg bg-navy-blue edupia-border-radius-44 eco-item pt-5 pb-3-2 px-5 d-flex position-relative">
				<div class="text-font-size-18 text-font-weight-600">
					<img class="mb-5" src="{{ asset('images/icons/homepage/EdupiaMath.svg') }}" alt="EdupiaMath">
					<p class="text-white line-height-28 mb-0">EDUPIA Toán - chương trình Toán Học</p>
					<p class="text-white line-height-28 mb-0">dành cho học sinh từ lớp 1 - lớp 5.</p>
					<p class="text-white line-height-28 mb-0">Con học Toán cùng giáo viên giỏi,</p>
					<p class="text-white line-height-28 mb-0">trường điểm</p>
					<div class="btn-discover mt-3 ml-6">
						<p class="text">KHÁM PHÁ</p>
					</div>
				</div>
				<img class="edupia-img-math position-absolute" src="{{ asset('images/imgs/homepage/edupia-math-img.png') }}"
					alt="edupia-math-img">
			</div>
		</div>

		<div class="row justify-content-between mb-4-0 mx-auto position-relative">
			<img class="star-23 position-absolute" src="{{ asset('images/icons/homepage/Star23.svg') }}" alt="Star23">
			<img class="star-26 position-absolute" src="{{ asset('images/icons/homepage/Star26.svg') }}" alt="Star26">
			<div
				class="item-eco mx-auto col-12-lg bg-dodger-blue-100 edupia-border-radius-44 eco-item pt-5 pb-3-2 px-5 d-flex position-relative">
				<div class="text-font-size-18 text-font-weight-600">
					<img class="mb-5" src="{{ asset('images/icons/homepage/EdupiaEnglish.svg') }}" alt="EdupiaEnglish">
					<p class="text-white line-height-28 mb-0">EDUPIA Tiểu Học - chương trình tiếng</p>
					<p class="text-white line-height-28 mb-0">Anh dành cho học sinh từ lớp 1 - lớp 5.</p>
					<p class="text-white line-height-28 mb-0">Bé học mà chơi, chơi mà học</p>
					<div class="btn-discover mt-6 ml-6">
						<p class="text">KHÁM PHÁ</p>
					</div>
				</div>
				<img class="edupia-img-english position-absolute"
					src="{{ asset('images/imgs/homepage/edupia-english-img.png') }}" alt="edupia-english-img">
			</div>
			<img class="star-24 position-absolute" src="{{ asset('images/icons/homepage/Star24.svg') }}" alt="Star24">
			<img class="star-25 position-absolute" src="{{ asset('images/icons/homepage/Star25.svg') }}" alt="Star25">

		</div>

		<div class="row justify-content-between mb-4-0 mx-auto">
			<div
				class="item-eco col-6-lg bg-purple edupia-border-radius-44 eco-item pt-5 pb-3-2 px-5 d-flex position-relative">
				<div class="text-font-size-18 text-font-weight-600">
					<img class="mb-5" src="{{ asset('images/icons/homepage/EdupiaTutor.svg') }}" alt="EdupiaTutor">
					<p class="text-white line-height-28 mb-0">EDUPIA TUTOR - chương trình gia sư tiếng</p>
					<p class="text-white line-height-28 mb-0">Anh trực tuyến chất lượng cao.</p>
					<p class="text-white line-height-28 mb-0">Lớp gia sư yêu thích - con cán đích điểm 10</p>
					<div class="btn-discover mt-6 ml-6">
						<p class="text">KHÁM PHÁ</p>
					</div>
				</div>
				<img class="edupia-img-tutor position-absolute" src="{{ asset('images/imgs/homepage/edupia-tutor-img.png') }}"
					alt="edupia-tutor-img">
			</div>
			<div
				class="item-eco col-6-lg bg-coral edupia-border-radius-44 eco-item pt-5 pb-3-2 px-5 d-flex position-relative">
				<div class="text-font-size-18 text-font-weight-600">
					<img class="mb-5" src="{{ asset('images/icons/homepage/EdupiaIelts.svg') }}" alt="EdupiaIelts">
					<p class="text-white line-height-28 mb-0">EDUPIA IELTS - tiếng Anh nền tảng 4</p>
					<p class="text-white line-height-28 mb-0">kỹ năng, chương trình học thuật, kiến</p>
					<p class="text-white line-height-28 mb-0">thức chuyên sâu cho mục tiêu ôn và</p>
					<p class="text-white line-height-28 mb-0">luyện thi IELTS</p>
					<div class="btn-discover mt-3 ml-6">
						<p class="text">KHÁM PHÁ</p>
					</div>
				</div>
				<img class="edupia-img-ielts position-absolute" src="{{ asset('images/imgs/homepage/edupia-ielts-img.png') }}"
					alt="edupia-ielts-img">
			</div>
		</div>
	</div>
	<!-- section 8 -->
	<div class="section-8 w-100">
		<div class="edupia-container-lg">
			<div class="row">
				<div class="col-12-lg mx-auto mb-5 text-font-size-40">
					<span class="text-blue-600">Báo Chí Và Truyền Thông Nói Gì Về</span>
					<span class="text-blue-500 d-inline-grid edupia-liner">
						EDUPIA
						<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
					</span>
				</div>
				<div class="col-12-lg mx-auto mb-5">
					<span class="small-title blue-900 d-block text-center">Luôn nỗ lực và hết mình vì cộng đồng trong
						hành trình phát triển, EDUPIA khẳng định sứ mệnh</span>
					<span class="small-title blue-900 d-block text-center"> vì “Một thế hệ học sinh với tương lai tốt
						đẹp hơn”.</span>
				</div>
				<div class="col-12-lg mx-auto video-intro position-relative">
					<div id="videoContainer" class="mb-4-0">
						<img id="thumbnail" src="{{ asset('images/imgs/homepage/hompage-thumbnail.png') }}" alt="hompage-thumbnail">
						<img class="position-absolute play-icon" src="{{ asset('images/icons/homepage/Play.svg') }}" alt="Play">
					</div>
					<p class="text-center mt-9">EDUPIA được đưa tin bởi những <span class="text-blue-500">kênh tin tức
							uy tín</span> tại Việt Nam</p>
				</div>
			</div>
		</div>
		<div class="marquee">
			<div class="marquee-content">
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/DanTri.svg') }}" alt="DanTri">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/ZingNews.svg') }}" alt="ZingNews">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Cafef.svg') }}" alt="Cafef">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Vov1.svg') }}" alt="Vov1">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/DanTri.svg') }}" alt="DanTri">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/ZingNews.svg') }}" alt="ZingNews">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Cafef.svg') }}" alt="Cafef">
				</div>
				<div class="marquee-tag">
					<img src="{{ asset('images/icons/homepage/Vov1.svg') }}" alt="Vov1">
				</div>
			</div>
		</div>
	</div>

	<!-- section 9 -->
	<div class="section-9 w-100">
		<div class="edupia-container-lg">
			<div class="row">
				<div class="col-12-lg mx-auto mb-5 text-font-size-40">
					<span class="text-blue-600">Những Giải Thưởng Gọi Tên</span>
					<span class="text-blue-500 d-inline-grid edupia-liner">
						EDUPIA
						<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
					</span>
				</div>
				<div class="col-12-lg mx-auto mb-5">
					<span class="small-title blue-900 d-block text-center">Những giải thưởng danh giá thêm một lần nữa khẳng định
						uy tín của EDUPIA trong hành trình</span>
					<span class="small-title blue-900 d-block text-center">phát triển của mình.</span>
				</div>
			</div>
		</div>
		<div class="row award w-100">
			<div class="col-7">
				<img src="{{ asset('images/imgs/homepage/award-img.png') }}" alt="award-img">
			</div>
			<div class="col-5">
				<div class="row py-5">
					<div class="col-4">
						<img src="{{ asset('images/imgs/homepage/asean-2019.png') }}" alt="asean-2019">
					</div>
					<div class="col-6 text">
						<p class="text-font-size-24 text-blue-500 text-font-weight-600">Top 50 thương hiệu vàng</p>
						<p class="text-font-size-18 text-font-weight-600">ASEAN BRAND AWARDS 2019</p>
					</div>
					<div class="col-2"></div>
				</div>
				<div class="row py-5">
					<div class="col-4 py-7">
						<img src="{{ asset('images/imgs/homepage/vietnam-digital.png') }}" alt="vietnam-digital">
					</div>
					<div class="col-6 text">
						<p class="text-font-size-24 text-blue-500 text-font-weight-600">Ứng dụng số tốt nhất</p>
						<p class="text-font-size-18 text-font-weight-600">VIETNAM DIGITAL AWARDS 2018</p>
					</div>
					<div class="col-2"></div>
				</div>
				<div class="row py-5">
					<div class="col-4 py-2">
						<img src="{{ asset('images/imgs/homepage/techin-asia.png') }}" alt="techin-asia">
					</div>
					<div class="col-6 text">
						<p class="text-font-size-24 text-blue-500 text-font-weight-600">Top 50 Startup hứa hẹn</p>
						<p class="text-font-size-18 text-font-weight-600">TECHINASIA 2021</p>
					</div>
					<!-- <div class="col-2"></div> -->
				</div>
			</div>
		</div>
	</div>
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