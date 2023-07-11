@extends('layouts.main')
@section('og-title')
Trang chủ
@endsection
@section('content')
<div class="home">
	<div class="w-100">
		<!-- <div class="banner ">
			<img class="w-100 object-fit-cover" src="{{ asset('images/imgs/imgpsh_fullsize.png') }}" alt="">

		</div> -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="mx-10 carousel-indicators justify-content-start">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
<script>
$('.carousel').carousel({
  interval: 2000
})
</script>
