@extends('layouts.main')
@section('og-title')
Vào Học
@endsection
@section('content')
<main class="go-learning text-center text-font-weight-600">
	<section class="mx-auto learning-title">
		<p class="m-0 text-font-size-36 text-uppercase">THAM GIA LỚP HỌC EDUPIA</p>
		<p class="m-0">Hãy chọn khóa học đã đăng ký và tiếp tục học cùng Edupia nhé!</p>
	</section>
	<section class="container edupia-mw-1230">
		<div class="row">
			{{-- tieu-hoc --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaLogo.svg') }}" alt="EdupiaMath">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA AI - TIỂU HỌC</p>
					<p class="text-font-weight-300 m-0">Tiếng Anh online lớp 1-5</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
			{{-- thcs --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaTHCS.svg') }}" alt="EdupiaTHCS">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA AI - THCS</p>
					<p class="text-font-weight-300 m-0">Tiếng Anh online lớp 6-9</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
			{{-- math --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaMath.png') }}" alt="EdupiaMath">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA EXTRA - TOÁN</p>
					<p class="text-font-weight-300 m-0">Toán online lớp 3-5</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			{{-- tieng viet --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaTV.svg') }}" alt="EdupiaTV">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA EXTRA - TIẾNG VIỆT</p>
					<p class="text-font-weight-300 m-0">Tiếng Việt online lớp 1-5</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
			{{-- ielts --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaIELTS.png') }}" alt="EdupiaIELTS">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA IELTS</p>
					<p class="text-font-weight-300 m-0">IELTS online lớp 6-9</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
			{{-- tutor --}}
			<div class="col">
				<div class="logo d-flex justify-content-center align-items-center">
					<img src="{{ asset('images/icons/homepage/EdupiaTutor.png') }}" alt="EdupiaTutor">
				</div>
				<div class="btn-action">
					<p class="text-font-weight-600 mb-3">EDUPIA TUTOR, PRO, NATIVE</p>
					<p class="text-font-weight-300 m-0">Lớp gia sư trực tuyến</p>
					<div class="mx-auto btn-go-learning">
						<p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</main>
@endsection