@extends('layouts.main')
@section('og-title')
Liên hệ
@endsection
@section('content')
<main class="contact">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230 header-text">
      <p class="m-0 text-font-size-36 text-font-weight-700 text-white">Liên hệ</p>
    </div>
  </section>
  <section class="container edupia-mw-1230 info pt-9">
    <div class="row">
      <div class="col-sm-5 mb-5">
        <p class="text-font-size-30 text-font-weight-500 mb-4">Thông tin liên hệ</p>
        <p class="text-font-size-20 text-font-weight-600">Công Ty Cổ Phần Giáo Dục Educa Corporation</p>
        <p class="text-font-size-18 text-font-weight-600">Văn phòng Hà nội:</p>
        <div class="d-flex flex-column text-font-weight-300 my-2">
          <div class="d-flex align-items-start mb-1">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Tầng 6, Tòa nhà Báo Sinh Viên - Hoa Học Trò, Yên Hòa, Cầu Giấy, Hà Nội</span>
          </div>
          <div class="d-flex align-items-start">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Tầng 6, Toà Comatce Tower 61 Nguỵ Như Kon Tum, Nhân Chính, Thanh Xuân, Hà Nội</span>
          </div>
        </div>
        <p class="text-font-size-18 text-font-weight-600">Văn phòng Hồ Chí Minh:</p>
        <div class="d-flex flex-column text-font-weight-300 mb-1">
          <div class="d-flex align-items-start">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Tầng 2, toà nhà Mach Office, số 127 Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, Hồ Chí Minh</span>
          </div>
        </div>
        <div class="d-flex align-items-start mb-1">
          <img class="mr-1" width="24" src="{{ asset('images/icons/homepage/PhoneIcon.svg') }}" alt="PhoneIcon" />
          <span class="text-font-weight-400">Điện thoại: <span class="text-font-weight-600">093.120.8686</b></span>
        </div>
        <div class="d-flex align-items-start">
          <img class="mr-1" width="24" src="{{ asset('images/icons/other/EmailIcon.svg') }}" alt="EmailIcon" />
          <span class="text-font-weight-400">Email: <span class="text-font-weight-600">donghanh@educa.vn</b></span>
        </div>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-5 mb-5">
        <p class="text-font-size-30 text-font-weight-500 mb-5">Kết nối với chúng tôi</p>
        <div class="d-flex align-items-start mb-6">
          <img width="44" class="mr-2" src="{{ asset('images/icons/other/FacebookIcon.svg') }}" alt="FacebookIcon" />
          <div class="text-font-weight-500">
            <p class="m-0 text-font-size-15 text-gray-500">FACEBOOK</p>
            <p class="m-0 text-font-size-18 connect-us">facebook.com/Edupia.vn</p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-6">
          <img width="44" class="mr-2" src="{{ asset('images/icons/other/InstagramIcon.svg') }}" alt="InstagramIcon" />
          <div class="text-font-weight-500">
            <p class="m-0 text-font-size-15 text-gray-500">INSTAGRAM</p>
            <p class="m-0 text-font-size-18 connect-us">instagram.com.com/Edupia.vn</p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-6">
          <img width="44" class="mr-2" src="{{ asset('images/icons/other/YoutubeIcon.svg') }}" alt="YoutubeIcon" />
          <div class="text-font-weight-500">
            <p class="m-0 text-font-size-15 text-gray-500">YOUTUBE</p>
            <p class="m-0 text-font-size-18 connect-us">youtube.com/TienganhonlineEdupia</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="m-0" />
  </section>
  <section class="edupia-mw-1230 container contact-form-detail">
    <div class="row mb-9">
      <div class="col-sm-4 text-font-size-30 text-font-weight-500">
        <p>Chúng tôi muốn nghe</p>
        <p>ý kiến ​​của bạn!</p>
      </div>
      <div class="col-sm-8 contact-form text-font-size-18 text-font-weight-500">
        <form>
          <div class="form-group">
            <label for="hoTen">Họ và tên <span class="text-red">*</span></label>
            <input type="text" class="form-control shadow-none" id="hoTen" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="soDienThoai">Số Điện thoại <span class="text-red">*</span></label>
              <input type="tel" class="form-control shadow-none" id="soDienThoai" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control shadow-none" id="email">
            </div>
          </div>
          <div class="form-group mb-5">
            <label for="nguonTin">Lời nhắn đến Edupia <span class="text-red">*</span></label>
            <textarea class="form-control shadow-none" id="nguonTin" rows="2" required></textarea>
          </div>
          <button type="submit" class="btn btn-block custom-button"><span class="text-font-weight-600 text-font-size-18 text-white">GỬI ĐI</span></button>
        </form>
      </div>
    </div>
    <hr class="m-0"/>
    <div class="row pt-8">
      <div class="col-sm-4 text-font-size-30 text-font-weight-500">
        <p>Câu hỏi thường gặp</p>
      </div>
      <div class="col-sm-8">
        <div class="d-flex justify-content-between collapsed text-font-weight-400 text-font-size-20" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
          <span>Làm thế nào để đăng ký tài khoản học tại Edupia?</span>
          <img class="if-collapsed" src="{{ asset('images/icons/other/ShowContentIcon.svg') }}" alt="ShowContentIcon" />
          <img class="if-not-collapsed" src="{{ asset('images/icons/other/HidenContentIcon.svg') }}" alt="HidenContentIcon" />
        </div>
        <div class="collapse" id="collapseContent">
          <div class="card-answer">
            <p class="m-0">Hướng dẫn ba mẹ cách đăng ký tài khoản học nhanh chóng và thuận tiện nhất tại video dưới đây </p>
            <a href="#">Link hướng dẫn</a>
          </div>
        </div>
        <div class="d-flex justify-content-between collapsed text-font-weight-400 text-font-size-20" data-toggle="collapse" href="#collapseContent2" aria-expanded="false" aria-controls="collapseContent">
          <span>Edupia cam kết những gì cho học viên theo học?</span>
          <img class="if-collapsed" src="{{ asset('images/icons/other/ShowContentIcon.svg') }}" alt="ShowContentIcon" />
          <img class="if-not-collapsed" src="{{ asset('images/icons/other/HidenContentIcon.svg') }}" alt="HidenContentIcon" />
        </div>
        <div class="collapse" id="collapseContent2">
          <div class="card-answer">
            <p class="m-0">Hướng dẫn ba mẹ cách đăng ký tài khoản học nhanh chóng và thuận tiện nhất tại video dưới đây </p>
            <a href="#">Link hướng dẫn</a>
          </div>
        </div>
        <div class="d-flex justify-content-between collapsed text-font-weight-400 text-font-size-20" data-toggle="collapse" href="#collapseContent3" aria-expanded="false" aria-controls="collapseContent">
          <span>Cách cài đặt ứng dụng và kích hoạt tài khoản học Edupia trên các thiết bị điện tử tại nhà?</span>
          <img class="if-collapsed" src="{{ asset('images/icons/other/ShowContentIcon.svg') }}" alt="ShowContentIcon" />
          <img class="if-not-collapsed" src="{{ asset('images/icons/other/HidenContentIcon.svg') }}" alt="HidenContentIcon" />
        </div>
        <div class="collapse" id="collapseContent3">
          <div class="card-answer">
            <p class="m-0">Hướng dẫn ba mẹ cách đăng ký tài khoản học nhanh chóng và thuận tiện nhất tại video dưới đây </p>
            <a href="#">Link hướng dẫn</a>
          </div>
        </div>
        <div class="d-flex justify-content-between collapsed text-font-weight-400 text-font-size-20" data-toggle="collapse" href="#collapseContent4" aria-expanded="false" aria-controls="collapseContent">
          <span>Một tài khoản có sử dụng được cho nhiều học sinh hay không?</span>
          <img class="if-collapsed" src="{{ asset('images/icons/other/ShowContentIcon.svg') }}" alt="ShowContentIcon" />
          <img class="if-not-collapsed" src="{{ asset('images/icons/other/HidenContentIcon.svg') }}" alt="HidenContentIcon" />
        </div>
        <div class="collapse" id="collapseContent4">
          <div class="card-answer">
            <p class="m-0">Hướng dẫn ba mẹ cách đăng ký tài khoản học nhanh chóng và thuận tiện nhất tại video dưới đây </p>
            <a href="#">Link hướng dẫn</a>
          </div>
        </div>
        <div class="d-flex justify-content-between collapsed text-font-weight-400 text-font-size-20" data-toggle="collapse" href="#collapseContent5" aria-expanded="false" aria-controls="collapseContent">
          <span>Làm thế nào khi quên tài khoản và mật khẩu đăng nhập?</span>
          <img class="if-collapsed" src="{{ asset('images/icons/other/ShowContentIcon.svg') }}" alt="ShowContentIcon" />
          <img class="if-not-collapsed" src="{{ asset('images/icons/other/HidenContentIcon.svg') }}" alt="HidenContentIcon" />
        </div>
        <div class="collapse" id="collapseContent5">
          <div class="card-answer">
            <p class="m-0">Hướng dẫn ba mẹ cách đăng ký tài khoản học nhanh chóng và thuận tiện nhất tại video dưới đây </p>
            <a href="#">Link hướng dẫn</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@section('script_links')
<script>

</script>
@endsection
