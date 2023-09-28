@extends('layouts.main')
@section('og-title')
Cẩm nang
@endsection
@section('content')
<main class="handbook">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230 header-text">
      <p class="m-0 text-font-size-36 text-font-weight-700 text-white">Cẩm nang</p>
    </div>
  </section>
  <section class="container edupia-mw-1230 preview">
    <div class="row">
      <div class="col-6">
        <div>
          <img width="100%" src="{{ asset('images/imgs/other/handbook-pic-1.png') }}" alt="handbook-pic-1" />
        </div>
        <div class="short-content">
          <span class="title text-font-size-20 text-font-weight-600">Tổng hợp từ vựng Tiếng Anh lớp 1 theo chủ đề giúp bé học hiệu quả</span>
          <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
              Một trong những yếu tố quan trọng hàng đầu của việc học Tiếng Anh chính là từ vựng. Tuy
              nhiên, đối với trẻ lớp 1 thì việc lựa chọn từ vựng học sao cho phù hợp với độ tuổi là điều
              không phải dễ dàng. Một trong những phương pháp giúp trẻ lớp 1 ghi nhớ từ vựng hiệu quả
              chính là tổng hợp từ vựng Tiếng Anh lớp 1 theo chủ đề.
            </p>
          </div>
          <div class="see-detail-btn">
            <span class="text-font-size-18 text-font-weight-400 text-white">Xem chi tiết</span>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="row mb-5">
          <div class="col">
            <img src="{{ asset('images/imgs/other/handbook-pic-2.png') }}" alt="handbook-pic-1" />
          </div>
          <div class="col">
            <p>
              Top 5 phần mềm học Tiếng Anh cho trẻ lớp 1 hot nhất hiện nay
            </p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
          <div class="col">
            <img src="{{ asset('images/imgs/other/handbook-pic-3.png') }}" alt="handbook-pic-1" />
          </div>
          <div class="col">
            <p>
              EDUPIA nhận khoản đầu tư 14 triệu USD và hướng tới "xuất khẩu" Edtech ra thị trường Đông Nam Á
            </p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
        <div class="row">
          <div class="col">
            <img src="{{ asset('images/imgs/other/handbook-pic-4.png') }}" alt="handbook-pic-1" />
          </div>
          <div class="col">
            <p>
              Tổng hợp 5 cách học tiếng Anh online lớp 4 hiệu quả ngay tại nhà
            </p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
  <section class="ask-form container-fluid">
    <div class="container edupia-mw-1230">
      <div class="row">
        <div class="col-6">
          <div class="text-font-size-26 text-font-weight-600 text-white mb-4">
            <p class="m-0">Trẻ em cần được trao cơ hội để có thể học tập</p>
            <p class="m-0">và phát triển tốt hơn. Giúp con khai phá tiềm </p>
            <p class="m-0">năng tư duy và ngôn ngữ ngay hôm nay.</p>
          </div>
          <div>
            <p class="text-font-size-16 text-font-weight-400 text-white">Nhập tên và số điện thoại để được Edupia tư vấn lộ trình học cho bé!</p>
            <form>
              <div class="form-group">
                <input type="text" class="form-control form-rounded" placeholder="Nhập tên và sdt của ba mẹ">
              </div>
              <button type="submit" class="btn btn-block custom-button py-2">
                <span class="text-font-weight-600 text-font-size-18 text-white">Nhận tư vấn hỏi miễn phí</span>
              </button>
            </form>
          </div>
        </div>
        <div class="col-1"></div>
        <div class="col-5">
          <div class="image-container">
            <img src="{{ asset('images/imgs/other/chicken-kid.png') }}" alt="chicken-kid" class="image" />
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="container edupia-mw-1230 other-handbook">
    {{-- page 1 --}}
    <div class="handbook-list page">
      <div class="row">
        <div class="col-sm-3">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-handbook-1.png') }}" alt="other-handbook-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Bạn muốn con giỏi tiếng Anh trước tuổi lên 10?</p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
        <div class="col-sm-3">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-handbook-1.png') }}" alt="other-handbook-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Tiền tố trong tiếng anh chi tiết và đầy đủ nhất</p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
        <div class="col-sm-3">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-handbook-1.png') }}" alt="other-handbook-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Từ vựng tiếng Anh lớp 5 cho bé chuẩn sách mới</p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
        <div class="col-sm-3">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-handbook-1.png') }}" alt="other-handbook-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-20 text-font-weight-600">Tổng hợp 12+ phần mềm học tiếng Anh bổ ích cho bé</p>
            <div class="author d-flex text-font-size-16 text-font-weigh-300">
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
