<!doctype html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('og-title')</title>
	<meta name="title" content="@yield('og-title')" />
	<meta name="image" content="@yield('og-image')" />
	<meta name="url" content="@yield('og-url')" />
	<meta name="site_name" content="edupia.vn" />
	<meta name="description" content="@yield('og-description')" />
	<link href="{{mix('css/app.css')}}" rel="stylesheet">
	@yield('header_links')
</head>

<body>
	<div class="wrapGeneralBig">
		@include('layouts.header')
		<div class="content">
			@yield('content')
		</div>
		@include('layouts.footer')
	</div>

	<script src="{{asset('js/app.js')}}"></script>
	@yield('script_links')
</body>
<script>
	window.onscroll = function () { myFunction() };

	var header = document.getElementById("iHeader");
	var sticky = header.offsetTop;

	function myFunction() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}
</script>

</html>