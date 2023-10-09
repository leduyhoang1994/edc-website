@extends('layouts.main')
@section('og-title')
Tin tức 
@endsection
@section('content')
<main class="news">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230 header-text">
      <p class="m-0 text-font-size-36 text-font-weight-700 text-white">Tin tức - Sự kiện</p>
    </div>
  </section>
  <section class="container edupia-mw-1230 preview">
    <div class="row">
      <div class="col-sm-6 mb-7">
        <div>
          <img class="w-100" width="100%" src="{{ asset('images/imgs/other/news-pic-1.png') }}" alt="news-pic-1" />
        </div>
        <div class="short-content">
          <span class="title text-font-size-20 text-font-weight-600">MobiFone và Educa hợp tác chiến lược nâng tầm nền giáo dục số Việt Nam</span>
          <div class="author d-flex text-font-size-16 text-font-weight-300">
            <div class="d-flex align-items-center mr-4">
              <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
              <span>Aladin</span>
            </div>
            <div class="d-flex align-items-center">
              <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
              <span>Thứ 3, 13-05-2023</span>
            </div>
          </div>
          <div class="text-font-size-18 text-font-weight-300">
            <p class="m-0">
              Ngày 9/8/2023 vừa qua diễn ra lễ ký kết hợp tác chiến lược giữa Tổng Công ty MobiFone và Công ty Cổ phần giáo dục Educa Corporation. Đây là cơ hội để MobiFone và Educa chia sẻ những điểm chung về tầm nhìn, sứ mệnh của mình trên con đường bồi dưỡng thế hệ trẻ của Việt Nam trở thành các công dân số....
            </p>
          </div>
          <div class="see-detail-btn">
            <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row mb-5">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-pic-2.png') }}" alt="news-pic-2" />
          </div>
          <div class="col-sm right-item">
            <p>
              Startup Edtech Việt Nam Educa nhận đầu tư từ Quỹ đầu tư Singapore Redefine Capital Fund
            </p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-4">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-pic-3.png') }}" alt="news-pic-3" />
          </div>
          <div class="col-sm right-item">
            <p>
              EDUPIA nhận khoản đầu tư 14 triệu USD và hướng tới "xuất khẩu" Edtech ra thị trường Đông Nam Á
            </p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-4">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-pic-4.png') }}" alt="news-pic-4" />
          </div>
          <div class="col-sm right-item">
            <p>
              Tổng giám đốc Educa nuôi giấc mơ 70% thế hệ trẻ Việt thạo tiếng Anh
            </p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-4">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ask-form container edupia-mw-1230">
    <p class="text-font-size-30 text-font-weight-300 text-white">BANNER 1230X152 </p>
  </section>
  <section class="container edupia-mw-1230 other-news">
    {{-- page 1 --}}
    <div class="news-list page">
      <div class="row">
        <div class="col-sm-3 mb-8">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-8">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-8">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-8">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="pagination">
      <button class="arrow" id="prevPage" disabled>
        <img src="{{ asset('images/icons/other/PrevBtn.svg') }}" alt="PrevBtn" />
      </button>
      <div class="pages">
        <div class="page-number active">1</div>
        <div class="page-number">2</div>
        <div class="page-number">3</div>
      </div>
      <button class="arrow" id="nextPage">
        <img src="{{ asset('images/icons/other/NextBtn.svg') }}" alt="NextBtn" />
      </button>
    </div>
  </section>
</main>
@endsection

@section('script_links')
<script>
   $(document).ready(function() {
    const $pages = $(".page");
    const $pageNumbers = $(".page-number");
    const $prevButton = $("#prevPage");
    const $nextButton = $("#nextPage");
    let currentPage = 0;

    function showPage(pageNumber) {
      $pages.hide();
      $pages.eq(pageNumber).show();
    }

    function updateButtons() {
      $prevButton.prop("disabled", currentPage === 0);
      $nextButton.prop("disabled", currentPage === $pages.length - 1);
    }

    function setActive() {
      $pageNumbers.removeClass("active");
      $pageNumbers.eq(currentPage).addClass("active");
    }

    $pageNumbers.on("click", function() {
      const index = $pageNumbers.index(this);
      showPage(index);
      currentPage = index;
      updateButtons();
      setActive();
    });

    $prevButton.on("click", function() {
      if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
        updateButtons();
        setActive();
      }
    });

    $nextButton.on("click", function() {
      if (currentPage < $pages.length - 1) {
        currentPage++;
        showPage(currentPage);
        updateButtons();
        setActive();
      }
    });

    showPage(currentPage);
    updateButtons();
  });
</script>
@endsection
