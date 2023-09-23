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
    <p>Phát Triển Sự Nghiệp Đáng Mơ Ước Cùng Edupia</p>
    <div>
      <p>Edupia luôn mong muốn đồng hành cùng những cá nhân với niềm đam mê chinh phục thử thách</p>
      <p>và khao khát tạo dựng giá trị cho xã hội.</p>
    </div>
    <p>Bạn đang tìm kiếm công việc gì ?</p>
   </div>
    <div class="row">
      <div class="col-3">
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
      <div class="col-2">
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
      <div class="col-3">
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
      <div class="col-4">
        <div class="search-container w-100">
          <div class="search-icon">
              <!-- Icon kính lúp (có thể sử dụng font-awesome hoặc icon tùy chỉnh) -->
              <img src="{{ asset('images/icons/other/SearchIcon.svg') }}" alt="SearchIcon" />
            </div>
          <input type="text" class="search-input" placeholder="Tìm kiếm">
          <button class="search-button text-font-size-18 text-font-weight-600">Tìm kiếm</button>
      </div>
      </div>
      </div>

    </div>

  </section>

</main>
@endsection

@section('script_links')

@endsection
