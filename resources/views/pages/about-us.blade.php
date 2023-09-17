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
							<h1 class="text-font-size-36 text-font-weight-700 mb-5">Giới thiệu chung</h1>
							<p class="text-font-size-18 text-font-weight-400 text-justify">Bắt nguồn từ mong muốn mang chất lượng dạy
								Tiếng Anh tại Trường Quốc tế đến với mọi học sinh Việt Nam,
								để các bạn nhỏ dù không có điều kiện kinh tế theo học tại các Trường Quốc Tế hay Trung Tâm đắt tiền vẫn
								có thể sử dụng Tiếng Anh tốt như người bản ngữ. Đây chính là hành trang chuẩn bị cho các em tương lai
								vươn ra thế giới. Chính vì lý do trên, đội ngũ sáng lập đã bắt tay vào xây dựng sản phẩm đầu tiên có tên
								“Chương trình học Tiếng Anh Online EDUPIA”.
							</p>
							<button class="btn btn-primary more-btn mt-4">Xem thêm cuộc thi</button>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="div-left-about">
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
								<img class="img-fluid" src="{{ asset('images/imgs/aboutus/about-content-2.png') }}" alt="item 2" />
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div>
							<h1 class="text-font-size-30 text-font-weight-600">Tầm nhìn</h1>
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
				<div class="row about-item-1">
					<div class="col-lg-6">
						<div>
							<h1 class="text-font-size-30 text-font-weight-600">Sứ mệnh</h1>
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
								<img class="img-fluid" src="{{ asset('images/imgs/aboutus/about-content-3.png') }}" alt="item 3" />
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