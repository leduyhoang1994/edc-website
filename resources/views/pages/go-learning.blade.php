@extends('layouts.main')
@section('og-title')
Vào Học
@endsection
@section('content')
<main class="go-learning text-center text-font-weight-600">
  <section class="mx-auto learning-title">
    <p class="m-0 text-font-size-36 text-uppercase">THAM GIA LỚP HỌC EDUPIA</p>
    <p class="m-0 text-font-size-20 text-font-family-quicksand">Hãy chọn khóa học đã đăng ký và tiếp tục học cùng Edupia nhé!</p>
  </section>
  <section class="container edupia-mw-1230">
    <div class="row">
      {{-- tieu-hoc --}}
      <div class="col mb-9">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/icons/homepage/EdupiaLogo.svg') }}" alt="EdupiaMath">
        </div>
        <div class="btn-action">
          <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA AI - TIỂU HỌC</p>
          <p class="text-font-weight-300 text-font-size-18 m-0">Tiếng Anh online lớp 1-5</p>
          <div class="mx-auto btn-go-learning text-font-size-20">
            <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
          </div>
        </div>
      </div>
      {{-- thcs --}}
      <div class="col mb-9">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/icons/homepage/EdupiaTHCS.svg') }}" alt="EdupiaMath">
        </div>
        <div class="btn-action">
          <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA AI - THCS</p>
          <p class="text-font-weight-300 text-font-size-18 m-0">Tiếng Anh online lớp 6-9</p>
          <div class="mx-auto btn-go-learning text-font-size-20">
            <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
          </div>
        </div>
      </div>
      {{-- math --}}
      <div class="col mb-9">
        <div class="logo d-flex justify-content-center align-items-center">
          <img width="184" src="{{ asset('images/icons/homepage/EdupiaMath.png') }}" alt="EdupiaMath">
        </div>
        <div class="btn-action">
          <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA EXTRA - TOÁN</p>
          <p class="text-font-weight-300 text-font-size-18 m-0">Toán online lớp 3-5</p>
          <div class="mx-auto btn-go-learning text-font-size-20">
            <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      {{-- tieng viet --}}
      <div class="col">
        <div class="classin-open">
          <img src="{{ asset('images/icons/other/RingIcon.svg') }}" alt="RingIcon">
          <div class="mt-2 mb-3 text-font-weight-400 text-font-size-18">
            <p class="m-0">Vui lòng liên hệ</p>
            <p class="m-0">ban giáo vụ để được hướng dẫn</p>
            <p class="m-0">tham gia lớp học</p>
          </div>
          <div class="open-btn">
            <span>Mở ClassIn</span>
          </div>
          <p class="mt-1 mb-8" href="#">Đăng ký học?</p>
          <p>Lớp học sẽ diễn ra trên ClassIn</p>
        </div>
        <div class="classin-item mb-9">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/icons/homepage/EdupiaTV.svg') }}" alt="EdupiaTV">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA EXTRA - TIẾNG VIỆT</p>
            <p class="text-font-weight-300 text-font-size-18 m-0">Tiếng Việt online lớp 1-5</p>
            <div class="mx-auto btn-go-learning text-font-size-20">
              <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
            </div>
          </div>
        </div>
      </div>
      {{-- ielts --}}
      <div class="col">
        <div class="classin-open">
          <img src="{{ asset('images/icons/other/RingIcon.svg') }}" alt="RingIcon">
          <div class="mt-2 mb-3 text-font-weight-400 text-font-size-18">
            <p class="m-0">Vui lòng liên hệ</p>
            <p class="m-0">ban giáo vụ để được hướng dẫn</p>
            <p class="m-0">tham gia lớp học</p>
          </div>
          <div class="open-btn">
            <span>Mở ClassIn</span>
          </div>
          <p class="mt-1 mb-8" href="#">Đăng ký học?</p>
          <p>Lớp học sẽ diễn ra trên ClassIn</p>
        </div>
        <div class="classin-item mb-9">
          <div class="logo d-flex justify-content-center align-items-center">
            <img width="188" src="{{ asset('images/icons/homepage/EdupiaIELTS.png') }}" alt="EdupiaIELTS">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA IELTS</p>
            <p class="text-font-weight-300 text-font-size-18 m-0">IELTS online lớp 6-9</p>
            <div class="mx-auto btn-go-learning text-font-size-20">
              <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
            </div>
          </div>
        </div>
      </div>
      {{-- tutor --}}
      <div class="col">
        <div class="classin-open">
          <img src="{{ asset('images/icons/other/RingIcon.svg') }}" alt="RingIcon">
          <div class="mt-2 mb-3 text-font-weight-400 text-font-size-18">
            <p class="m-0">Vui lòng liên hệ</p>
            <p class="m-0">ban giáo vụ để được hướng dẫn</p>
            <p class="m-0">tham gia lớp học</p>
          </div>
          <div class="open-btn">
            <span>Mở ClassIn</span>
          </div>
          <p class="mt-1 mb-8" href="#">Đăng ký học?</p>
          <p>Lớp học sẽ diễn ra trên ClassIn</p>
        </div>
        <div class="classin-item mb-9">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/icons/homepage/EdupiaTutor.svg') }}" alt="EdupiaTutor">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-600 text-font-size-22 mb-1">EDUPIA TUTOR, PRO, NATIVE</p>
            <p class="text-font-weight-300 text-font-size-18 m-0">Lớp gia sư trực tuyến</p>
            <div class="mx-auto btn-go-learning text-font-size-20">
              <p class="m-0 text-white text-font-weight-600">VÀO HỌC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="overlay"></div>
</main>
@endsection
@section('script_links')
<script>
  $(document).ready(function() {
    $(".btn-go-learning").click(function() {
      // const classinOpen = $(this).closest(".classin-open");
      // const classinItem = $(this).closest(".classin-item");
      $(this).closest(".col").find(".classin-open").show();
      // Hiển thị classin-item
      $(this).closest(".col").find(".classin-item").hide();

      $(".overlay").show();
    });
  });
  $(document).click(function(event) {
    if (!$(event.target).closest(".classin-open, .classin-item").length) {
      $(".classin-open").hide();
      $(".classin-item").show();
      // Ẩn overlay
      $(".overlay").hide();
    }
  });
  // Xử lý sự kiện khi nhấn phím "Esc"
  $(document).keydown(function(event) {
    if (event.keyCode === 27) { // Mã phím 27 tương đương với phím "Esc"
      $(".classin-open").hide();
      $(".classin-item").show();
      $(".overlay").hide();
    }
  });

</script>
@endsection
