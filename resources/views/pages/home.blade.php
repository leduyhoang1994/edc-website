@extends('layouts.main')
@section('og-title')
Trang chủ
@endsection
@section('content')
<div class="home">
	<div class="w-100">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-indicators justify-content-end form-register">
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
			<ol class="carousel-indicators justify-content-start carousel-customize py-5">
				<img data-target="#carouselExampleIndicators" data-slide-to="0" src="{{ asset('images/logos/IndicatorsActive.svg') }}" alt="First slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="1" class="ml-1 mr-1" src="{{ asset('images/logos/Dot.svg') }}" alt="Second slide">
				<img data-target="#carouselExampleIndicators" data-slide-to="2" src="{{ asset('images/logos/Dot.svg') }}" alt="Third slide">
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
</div>
@endsection

@section('script_links')
<script>
		$('.carousel').carousel({
			interval: false,
		});
		$(".carousel-indicators img").click(function(){
			$(".carousel-indicators img").attr('src', "{{ asset('images/logos/Dot.svg') }}");
  		$(this).attr('src', "{{ asset('images/logos/IndicatorsActive.svg') }}");
		});

</script>

@endsection
