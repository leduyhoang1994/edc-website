@extends('layouts.main')
@section('og-title')
Trang chủ
@endsection
@section('content')
<div class="home">
	<div class="banner w-100">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-indicators justify-content-end form-register edupia-container-lg ">
				<div class="justify-content-end register-wrapp">
					<form action="">
						<span class="text-blue-600 d-block text-center">Ba mẹ đăng ký nhận </span>
						<span class="text-blue-600 d-block text-center"> tư vấn MIỄN PHÍ tại đây nhé!</span></span>
						<div class="mt-5 mb-3 form-group">
							<input type="email" class="form-control form-control-customize" id="email"
								placeholder="Họ và tên phụ huynh">
						</div>
						<div class="form-group">
							<input type="email" class="form-control form-control-customize" id="phone"
								placeholder="Số điện thoại phụ huynh">
						</div>
						<div class="form-group">
							<input type="email" class="form-control form-control-customize" id="class"
								placeholder="Nhập lớp học của con">
						</div>
						<select class="form-select w-100 form-select-customize" aria-label="Chọn khóa học quan tâm">
							<option selected>Chọn khóa học đang quan tâm</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<button type="submit"
							class="w-100 btn bg-blue-500 mt-5  py-1 text-uppercase font-weight-bold text-white">ĐĂNG KÝ
							NGAY</button>
					</form>
				</div>

			</div>
			<ol class="carousel-indicators justify-content-start edupia-container-lg py-5">
				<img data-target="#carouselExampleIndicators" data-slide-to="0"
					src="{{ asset('images/icons/homepage/IndicatorsActive.svg') }}" alt="First slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="1" class="ml-1 mr-1"
					src="{{ asset('images/icons/homepage/Dot.svg') }}" alt="Second slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="2"
					src="{{ asset('images/icons/homepage/Dot.svg') }}" alt="Third slide">
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
				<span class="text-blue-500 d-inline-grid edupia-liner">
					EDUPIA
					<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
				</span>
				<span class="text-blue-600">- Tiếng Anh Online</span>
				<span class="text-blue-500"> TOÀN DIỆN </span>
				<span class="d-block text-center text-blue-600">Cho Học Sinh Từ Lớp 1 - 9</span>
			</div>
			<div class="col-12-lg mx-auto mb-7">
				<span class="small-title blue-900 d-block text-center">Tiếp cận phương pháp đào tạo CHUẨN quốc tế đầu
					tiên tại Việt Nam,</span>
				<span class="small-title blue-900 d-block text-center">giúp con tiến bộ vượt bậc môn Tiếng Anh</span>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-4-lg text-center ">
				<img class="mb-5" src="{{ asset('images/imgs/homepage/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					100% giáo viên Anh - Mỹ
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Đội ngũ giáo viên bản địa với
					chuyên</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">môn vững vàng sẽ giúp con phát
					triển</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">toàn diện 4 kỹ năng</p>
			</div>
			<div class="col-4-lg text-center">
				<img class="mb-5" src="{{ asset('images/imgs/homepage/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					Chương trình chuẩn Bộ Giáo Dục
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Bám sát nội dung trong Sách Giáo
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Khoa. Con học có định hướng rõ</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">ràng, tự tin chinh phục điểm cao
				</p>
			</div>
			<div class="col-4-lg text-center">
				<img class="mb-5" src="{{ asset('images/imgs/homepage/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					Giáo viên chủ nhiệm sát sao
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Ban giáo vụ đồng hành, giúp đỡ con
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">trong suốt quá trình học, cùng con
					kiên </p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">trì theo đuổi mục tiêu</p>
			</div>

		</div>
		<div class="row justify-content-between bg-white">
			<div class="col-12-lg mx-auto">
				<img src="{{ asset('images/imgs/homepage/chicken-pea-1.png') }}" alt="chicken-pea-1">
			</div>
		</div>
	</div>
	<!-- section 3 -->
	<div class="w-100 section-3 ">
		<div class="edupia-container-lg">
			<div class="block-1 text-center">
				<div class="row m-auto">
					<div class="col-lg-12 mb-5">
						<span class="text-blue-600">Con Nhận Được Gì Sau Khi Tham Gia Khóa Học </span>
						<span class="text-blue-500 d-inline-grid edupia-liner">
							EDUPIA
							<img src="{{ asset('images/icons/homepage/AnimationLine.svg') }}" alt="AnimationLine">
						</span>
					</div>
					<div class="col-12-lg mx-auto mb-7">
						<span class="small-title blue-900 d-block text-center">EDUPIA là sản phẩm đi đầu trong ứng dụng
							công nghệ trong lĩnh vực giáo dục, với khao khát đem lại</span>
						<span class="small-title blue-900 d-block text-center">cơ hội học tiếng Anh online chất lượng
							cao cho hàng triệu học sinh Việt Nam</span>
					</div>
					<div class="col-lg-3">
						<div class="img-frame position-relative">
							<img class="frame" src="{{ asset('images/imgs/homepage/boder-home-section-3-1.png') }}"
								alt="boder-home-section-3-1">
							<img class="picture" src="{{ asset('images/imgs/homepage/home-section-3-1.png') }}"
								alt="home-section-3-1">
						</div>
					</div>
					<div class="col-lg-3">
						<img class="drawn-arrows" src="{{ asset('images/icons/homepage/DrawnArrows.svg') }}" alt="drawn-arrows-1">
					</div>
					<div class="col-lg-6 desc-1 text-blue-600 text-left">
						<p>Con yêu thích và tự giác học tiếng Anh một</p>
						<p>cách tự nhiên</p>
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
					<span class="small-title blue-900 d-block text-center">Những giải thưởng danh giá thêm một lần nữa khẳng định uy tín của EDUPIA trong hành trình</span>
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
	$(".carousel-indicators img").click(function() {
			$(".carousel-indicators img").attr('src', "{{ asset('images/icons/homepage/Dot.svg') }}");
			$(this).attr('src', "{{ asset('images/icons/homepage/IndicatorsActive.svg') }}");
	});

	$('.play-icon').click(function() {
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