@extends('layouts.main')
@section('og-title')
Tuyển dụng
@endsection
@section('content')
<main class="recruitment">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230 header-text">
      <p class="m-0 text-font-size-36 text-font-weight-700 text-white">Tuyển dụng Edupia</p>
    </div>
  </section>
  <section class="container edupia-mw-1230 header-title">
    <div class="text-center">
      <p class="text-font-size-30 text-font-weight-500">Phát Triển Sự Nghiệp Đáng Mơ Ước Cùng Edupia</p>
      <div class="desc-title text-font-size-18 text-font-weight-300">
        <p>Edupia luôn mong muốn đồng hành cùng những cá nhân với niềm đam mê chinh phục thử thách</p>
        <p>và khao khát tạo dựng giá trị cho xã hội.</p>
      </div>
      <p class="text-font-size-20 text-font-weight=600 mb-3">Bạn đang tìm kiếm công việc gì ?</p>
    </div>
    <div class="row align-items-center">
      <div class="col-sm-3 my-1">
        <div class="form-group">
          <select class="select-cus form-select rounded-pill w-100 text-font-size-18 text-font-weight-400" aria-label="Select Example">
            <option selected>Tất cả bộ phận</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
          <span class="custom-icon">
            <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
          </span>

        </div>
      </div>
      <div class="col-sm-2 my-1">
        <div class="form-group">
          <select class="select-cus form-select rounded-pill w-100 text-font-size-18 text-font-weight-400" aria-label="Select Example">
            <option selected>Tất cả địa điểm</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
          <span class="custom-icon">
            <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
          </span>

        </div>
      </div>
      <div class="col-sm-3 my-1">
        <div class="form-group">
          <select class="select-cus form-select rounded-pill w-100 text-font-size-18 text-font-weight-400" aria-label="Select Example">
            <option selected>Hình thức làm việc</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
          <span class="custom-icon">
            <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
          </span>

        </div>
      </div>
      <div class="col-sm-4 my-1">
        <div class="search-container w-100">
          <div class="search-icon">
            <img src="{{ asset('images/icons/other/SearchIcon.svg') }}" alt="SearchIcon" />
          </div>
          <input type="text" class="search-input" placeholder="Tìm kiếm">
          <button class="search-button text-font-size-18 text-font-weight-600">Tìm kiếm</button>
        </div>
      </div>
    </div>

  </section>
  <section class="other-position edupia-mw-1230 container">
    <div class="position-list-job page">
      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>
    </div>
    <div class="position-list-job page">
      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>
    </div>
    <div class="position-list-job page">
      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-sm-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing
            Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>

        </div>
        <div class="col-sm-4 d-flex align-items-center text-font-weight-400 text-font-size-18">
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-sm-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
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
    <hr />
  </section>
  <section class="contact edupia-mw-1230 container">
    <div class="text-center">
      <p>Số điện thoại liên hệ tuyển dụng:</p>
      <div class="d-flex justify-content-center align-items-center">
        <img class="mr-1" width="23" src="{{ asset('images/icons/homepage/PhoneIcon.svg') }}" alt="PhoneIcon" />
        <span class="text-blue-500 text-font-size-30 text-font-weight-700">024 6295 4629</span>
      </div>
      <p>Thời giờ làm việc:</p>
      <p>- Sáng: 8h00 - 12h00</p>
      <p>- Chiều: 13h30 - 17h30</p>
      <p>- Nghỉ: Chủ nhật và các ngày Lễ, Tết</p>
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
