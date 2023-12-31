<!doctype html>
<html lang="vi">
<head>
    <meta property="zalo-platform-site-verification" content="FjwODkFFAciNlOfMnPC7IHg6q5FszGOBCpS"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('og-title')</title>
    <meta name="title" content="@yield('og-title')"/>
    <meta name="image" content="@yield('og-image')"/>
    <meta name="url" content="@yield('og-url')"/>
    <meta name="site_name" content="edupia.vn"/>
    <meta name="description" content="@yield('og-description')"/>
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    @yield('header_links')
</head>
<body>
    <div class="container">
        <div class="header">
            @include('layouts.header')
        </div>
        @yield('content')
        <div class="footer">
            @include('layouts.footer')
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
