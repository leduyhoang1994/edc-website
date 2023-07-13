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
							<input type="email" class="form-control form-control-customize" id="email" placeholder="Họ và tên phụ huynh">
						</div>
						<div class="form-group">
							<input type="email" class="form-control form-control-customize" id="phone" placeholder="Số điện thoại phụ huynh">
						</div>
						<div class="form-group">
							<input type="email" class="form-control form-control-customize" id="class" placeholder="Nhập lớp học của con">
						</div>
						<select class="form-select w-100 form-select-customize" aria-label="Chọn khóa học quan tâm">
							<option selected>Chọn khóa học đang quan tâm</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<button type="submit" class="w-100 btn bg-blue-500 mt-5  py-1 text-uppercase font-weight-bold text-white">ĐĂNG KÝ NGAY</button>
					</form>
				</div>
				
			</div>
			<ol class="carousel-indicators justify-content-start edupia-container-lg py-5">
				<img data-target="#carouselExampleIndicators" data-slide-to="0" src="{{ asset('images/icons/IndicatorsActive.svg') }}" alt="First slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="1" class="ml-1 mr-1" src="{{ asset('images/icons/Dot.svg') }}" alt="Second slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="2" src="{{ asset('images/icons/Dot.svg') }}" alt="Third slide">
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="{{ asset('images/imgs/imgpsh_fullsize.png') }}" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="https://fastly.picsum.photos/id/2/1440/532.jpg?hmac=Fk--igIQyi6twk6odnElXoeWh4c1IA0j0DoIsyN6Nnk" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="https://fastly.picsum.photos/id/1059/1440/532.jpg?hmac=KBBpfuBmwdYK-GtgG8BBxq4VZsCYQLx3o96hDb9BWLo" alt="Third slide">
				</div>
			</div>
			
		</div>
	</div>
	<!-- section chicken-pea -->
	<div class="section-2 edupia-container-lg">
		<div class="row w-75 m-auto">
			<div class="col-12-lg mx-auto mb-6">
				<span class="text-blue-500 d-inline-grid">
					EDUPIA
					<img src="{{ asset('images/icons/AnimationLine.svg') }}" alt="AnimationLine">
				</span> 
				<span class="text-blue-600">- Tiếng Anh Online</span>
				<span class="text-blue-500"> TOÀN DIỆN </span> 
				<span class="d-block text-center text-blue-600">Cho Học Sinh Từ Lớp 1 - 9</span>
			</div>
			<div class="col-12-lg mx-auto mb-7">
				<span class="small-title blue-900 d-block text-center">Tiếp cận phương pháp đào tạo CHUẨN quốc tế đầu tiên tại Việt Nam,</span>
				<span class="small-title blue-900 d-block text-center">giúp con tiến bộ vượt bậc môn Tiếng Anh</span>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-4-lg text-center ">
				<img class="mb-5" src="{{ asset('images/imgs/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					100% giáo viên Anh - Mỹ
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Đội ngũ giáo viên bản địa với chuyên</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">môn vững vàng sẽ giúp con phát triển</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">toàn diện 4 kỹ năng</p>
			</div>
			<div class="col-4-lg text-center">
				<img class="mb-5" src="{{ asset('images/imgs/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					Chương trình chuẩn Bộ Giáo Dục
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Bám sát nội dung trong Sách Giáo</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Khoa. Con học có định hướng rõ</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">ràng, tự tin chinh phục điểm cao</p>
			</div>
			<div class="col-4-lg text-center">
				<img class="mb-5" src="{{ asset('images/imgs/section-2-img.jpg') }}" alt="section-2-img">
				<p class="text-blue-600 font-weight-bold text-font-size-24 mb-0">
					Giáo viên chủ nhiệm sát sao
				</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">Ban giáo vụ đồng hành, giúp đỡ con</p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">trong suốt quá trình học, cùng con kiên </p>
				<p class="text-blue-900 text-font-weight-500 text-font-size-20 mb-0">trì theo đuổi mục tiêu</p>
			</div>

		</div>
		<div class="row justify-content-between bg-white">
			<div class="col-12-lg mx-auto">
				<img  src="{{ asset('images/imgs/chicken-pea-1.png') }}" alt="chicken-pea-1">
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
						<span class="text-blue-500 d-inline-grid">
							EDUPIA
							<img src="{{ asset('images/icons/AnimationLine.svg') }}" alt="AnimationLine">
						</span> 
					</div>
					<div class="col-12-lg mx-auto mb-7">
						<span class="small-title blue-900 d-block text-center">EDUPIA là sản phẩm đi đầu trong ứng dụng công nghệ trong lĩnh vực giáo dục, với khao khát đem lại</span>
						<span class="small-title blue-900 d-block text-center">cơ hội học tiếng Anh online chất lượng cao cho hàng triệu học sinh Việt Nam</span>
					</div>
					<div class="col-lg-3">
						<div class="img-frame position-relative">
							<img class="frame" src="{{ asset('images/imgs/boder-home-section-3-1.png') }}" alt="boder-home-section-3-1">
							<img class="picture" src="{{ asset('images/imgs/home-section-3-1.png') }}" alt="home-section-3-1">
						</div>
					</div>
					<div class="col-lg-3">
						<img class="drawn-arrows" src="{{ asset('images/icons/DrawnArrows.svg') }}" alt="drawn-arrows-1">
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
						<img class="drawn-arrows" src="{{ asset('images/icons/DrawnArrowsLeft.svg') }}" alt="drawn-arrows-1">
					</div>
					
					<div class="col-lg-3">
						<div class="img-frame position-relative">
							<img class="frame" src="{{ asset('images/imgs/border-home-section-4-1.png') }}" alt="border-home-section-4-1">
							<img class="picture" src="{{ asset('images/imgs/home-section-4-1.png') }}" alt="home-section-4-1">
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
							<img class="frame" src="{{ asset('images/imgs/border-home-section-5-1.png') }}" alt="border-home-section-5-1">
							<img class="picture" src="{{ asset('images/imgs/home-section-5-1.png') }}" alt="home-section-5-1">
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
					<img src="{{ asset('images/icons/AnimationLine.svg') }}" alt="AnimationLine">
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
			<div class="block-2 bg-goldenrod"></div>
			<div class="block-3 bg-dodger-blue"></div>
			<div class="block-4 bg-coral"></div>
	</div>

</div>
@endsection


@section('script_links')
<script>
		$('.carousel').carousel({
			interval: false,
		});
		$(".carousel-indicators img").click(function(){
			$(".carousel-indicators img").attr('src', "{{ asset('images/icons/Dot.svg') }}");
  		$(this).attr('src', "{{ asset('images/icons/IndicatorsActive.svg') }}");
		});

</script>

@endsection
