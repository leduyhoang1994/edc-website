@extends('layouts.main')
@section('og-title')
Tài liệu
@endsection
@section('content')
<main class="document">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230">
      <div class="content text-center mx-auto">
        <p class="text-font-weight-600 text-font-size-36">Học Liệu Cho Bé</p>
        <p class="text-font-weight-400 text-font-size-18">Những bài tập và tài liệu Tiếng Anh, Toán, Tiếng Việt
          hỗ trợ bé học tập toàn diện.</p>
        <div class="search-container w-100">
          <div class="search-icon">
            <img width="23" src="{{ asset('images/icons/other/SearchIcon.svg') }}" alt="SearchIcon" />
          </div>
          <input type="text" class="search-input" placeholder="Nhập chủ đề học liệu ba mẹ cần tìm">
          <button class="search-button text-font-size-18 text-font-weight-600">Tìm kiếm</button>
        </div>
        <span class="text-font-size-16 text-font-weight-400">Các tìm kiếm phổ biến:
          <i class="ml-2">Cùng con học Tiếng Anh</i>
          <i class="ml-2">Nâng cao trí tuệ</i>
          <i class="ml-2">Ở nhà cùng con</i>
        </span>
      </div>
    </div>
  </section>

  <section class="container edupia-mw-1230 other-document">
    <div class="row align-items-center filter">
      <div class="col-2 pb-2 text-font-size-20 text-font-weight-600">
        <p class="m-0">Tài liệu môn học</p>
      </div>
      <div class="col-3">
        <div class="form-group">
          <select class="select-cus form-select w-100 text-font-size-18 text-font-weight-400" aria-label="Select Example">
            <option selected>Chọn môn học</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
          <span class="custom-icon">
            <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
          </span>

        </div>
      </div>
      <div class="col-3"></div>
      <div class="col-1 pb-2 text-font-size-20 text-font-weight-600 px-0">
        <p>Mới nhất</p>
      </div>
      <div class="col-3">
        <div class="form-group">
          <select class="select-cus form-select w-100 text-font-size-18 text-font-weight-400" aria-label="Select Example">
            <option selected>Mới nhất</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
          <span class="custom-icon">
            <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
          </span>

        </div>
      </div>
    </div>
    {{-- page 1 --}}
    <div class="document-list page">
      <div class="row mb-6">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- page-2 --}}
    <div class="document-list page">
      <div class="row mb-6">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- page-3 --}}
    <div class="document-list page">
      <div class="row mb-6">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-1">
          </div>
          <div class="btn-action">
            <p class="text-font-weight-400 text-font-size-16">
              Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
            </p>
            <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
              <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
              <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
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
  <section>
    <div class="modal fade custom-modal" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- Nút close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Phần bên trái (hình ảnh) -->
              <div class="col-md-5">
                <img src="{{ asset('images/icons/other/DocumentModalIcon.svg') }}" alt="DocumentModalIcon">
              </div>
              <!-- Phần bên phải (form) -->
              <div class="col-md-7">
                <p class="text-font-size-18 text-font-weight-700 text-white ml-1 mb-2">Vui lòng đăng ký
                  thông tin để nhận tài liệu!</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Họ và tên phụ huynh">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Số điện thoại phụ huynh">
                  </div>
                  <button type="submit" class="btn btn-block custom-button py-2">
                    <span class="text-font-weight-600 text-font-size-18 text-white">ĐĂNG KÝ</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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
