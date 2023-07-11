<nav class="navbar navbar-expand-lg navbar-light mw-75 px-0 py-2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="{{ asset('images/logos/LogoBrandEdupia.svg') }}" alt="Logo" class="logo">
        </a>
      </div>
      <div class="col-lg-6"> <!-- Thêm một cột col-lg-6 cho phần giữa -->
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar4">
          <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item px-lg-2 active">
              <a class="nav-link text-blue-900" href="#">
                <span class="d-inline-block d-lg-none icon-width "></span>Giới thiệu
              </a>
            </li>
            <li class="nav-item px-lg-2">
              <a class="nav-link text-blue-900" href="#">
                <span class="d-inline-block d-lg-none icon-width"></span>Sản phẩm
              </a>
            </li>
            <li class="nav-item px-lg-2 dropdown d-menu">
              <a class="nav-link text-blue-900" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-inline-block d-lg-none icon-width"></span>Tin Tức
                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </a>
              <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01" style="display: none;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item px-lg-2">
              <a class="nav-link text-blue-900" href="#">
                <span class="d-inline-block d-lg-none icon-width"></span>Liên hệ
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3"> <!-- Thêm một cột col-lg-3 cho phần cuối -->
        <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link text-blue-900" href="#">
              <i class="fab fa-twitter"></i>
              <span class="d-lg ml-3">Đăng ký</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="btn btn-warning mx-1 text-uppercase">Vào học</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
