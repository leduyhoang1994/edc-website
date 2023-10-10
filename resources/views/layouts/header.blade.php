<div class="header-area header-transparrent" id="iHeader">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="d-flex align-items-center justify-content-start position-relative">
      <a class="navbar-brand logo-header" href="{{ route('home') }}">
        <img src="{{ asset('images/icons/homepage/LogoBrandEdupia.svg') }}" alt="Logo" class="logo img-fluid">
      </a>
      <div class="d-flex gap-8 tag-logo position-absolute">
        <a href="#"
          class="btn bg-yellow-400 font-weight-500 rounded-pill text-font-size-14 text-black-100 item-logo">Babilala</a>
        <a href="#" class="btn bg-yellow-400 font-weight-500 rounded-pill text-font-size-14 text-black-100 item-logo">Edupia
          Business</a>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse nav-custom-content" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto nav-primary">
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{ route('about-us') }}">
            <span class="d-inline-block d-lg-none icon-width text-font-size-16"></span>Giới thiệu
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="d-inline-block d-lg-none icon-width text-font-size-16"></span>Sản phẩm
            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('native') }}">Edupia Native</a>
            <a class="dropdown-item" href="{{ route('productAI') }}">Edupia AI</a>
            <a class="dropdown-item" href="{{ route('productIELTS') }}">Edupia IELTS</a>
            <a class="dropdown-item" href="{{ route('productPro') }}">Edupia Pro</a>
            <a class="dropdown-item" href="{{ route('productExtra') }}">Edupia Extra</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="d-inline-block d-lg-none icon-width"></span>Tin Tức
            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="{{ route('news') }}">Tin Tức Chung</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown3" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="d-inline-block d-lg-none icon-width"></span>Liên Hệ
            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="{{ route('contact') }}">Liên hệ</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="text-white mr-5 text-font-weight-400 item-nav-left" href="#">
          Kích hoạt tài khoản
        </a>
        <a href="#" class="btn px-5 bg-yellow-400 text-font-weight-500 text-white rounded-pill mr-5 item-nav-left">
          Vào học
        </a>
        <div class="cursor-pointer my-2 my-sm-0 item-nav-left">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.3496 12.1484L15 15.8645" stroke="white" stroke-width="1.3" stroke-linecap="round"
              stroke-linejoin="round" />
            <path
              d="M1 7.37044C1 10.8887 3.80175 13.7409 7.25788 13.7409C8.98892 13.7409 10.5559 13.0254 11.6888 11.869C12.8178 10.7167 13.5158 9.12655 13.5158 7.37044C13.5158 3.85214 10.714 1 7.25788 1C3.80175 1 1 3.85214 1 7.37044Z"
              stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </form>
    </div>
  </nav>
</div>