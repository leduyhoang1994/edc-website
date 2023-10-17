@extends('layouts.main')
@section('og-title')
Tài liệu chi tiết
@endsection
@section('content')
<main class="document-detail">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230">
      <div class="row">
        <div class="col-sm-5 px-0">
          <div class="book-cover">
            <img src="{{ asset('images/imgs/other/book-cover.png') }}" alt="book-cover" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="description">
            <p class="text-font-size-20 text-font-weight-600 mb-0">Đâu là chương trình dạy học tiếng Anh Tiểu học chất lượng cao nên đầu tư cho con?</p>
            <div class="text-font-size-16 text-font-weight-300 category">
              <span>Tiếng Anh</span>
            </div>
            <div class="text-font-size-18 text-font-weight-300 mb-5">
              <p class="mb-2 text-font-size-18 text-font-weight-300">
                Học liệu “Sudoku kids” dành cho các bé từ 3 tuổi. Học liệu này giúp bé rèn luyện tư duy logic, óc quan sát và phát triển trí thông minh.
              </p>
              <p class="mb-2 text-font-size-18 text-font-weight-300">
                Ba mẹ in màu học liệu khổ A4, cắt các hình bên phải theo nét đứt và hướng dẫn bé chơi bằng cách sắp xếp các hình còn thiếu sao cho mỗi hàng dọc và hàng ngang đều có đấy đủ các hình vẽ.
              </p>
              <p class="mb-2 text-font-size-18 text-font-weight-300">
                Edupia chúc ba mẹ và các bé học tập thật vui và hiệu quả!
              </p>
            </div>
            <button class="btn btn-block custom-button py-2 mb-5">
              <img src="{{ asset('images/icons/other/DownloadIcon.svg') }}" alt="DownloadIcon" />
              <span class="text-font-weight-600 text-font-size-18 text-white">Tải ngay</span>
            </button>
            <div>
              <span>Chia sẻ học liệu này</span>
              <img class="ml-2" src="{{ asset('images/icons/homepage/SocialIcon.svg') }}" alt="social-icon" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ask-form container-fluid">
    <div class="container edupia-mw-1230">
      <div class="row">
        <div class="col-sm-7 px-6 form-advise">
          <div class="text-font-size-26 text-font-weight-600 text-white mb-4">
            <p class="m-0">Trẻ em cần được trao cơ hội để có thể học tập và phát triển tốt hơn. Giúp con khai phá tiềm năng tư duy và ngôn ngữ ngay hôm nay.</p>
          </div>
          <div>
            <p class="text-font-size-16 text-font-weight-400 text-white label-form">Nhập tên và số điện thoại để được Edupia tư vấn lộ trình học cho bé!</p>
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
        <div class="col-sm-5">
          <div class="image-container">
            <img class="w-100" src="{{ asset('images/imgs/other/chicken-kid.png') }}" alt="chicken-kid" class="image" />
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="container edupia-mw-1230 other-document">
    <p class="text-center text-font-size-36 text-font-weight-500 mb-6">Tài liệu cho con đáng quan tâm khác</p>
    <div class="row">
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-2">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-3">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-4">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
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
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-1.png') }}" alt="document-pic-1">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-2.png') }}" alt="document-pic-2">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-3.png') }}" alt="document-pic-3">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-6">
        <div class="logo d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/imgs/other/document-pic-4.png') }}" alt="document-pic-4">
        </div>
        <div class="btn-action mt-3">
          <p class="text-font-weight-400 text-font-size-16 m-0">
            Enspire Start - cùng con học tiếng Anh đúng chuẩn Bộ Giáo dục
          </p>
          <div class="mx-auto btn-download" data-toggle="modal" data-target="#documentModal">
            <img src="{{ asset('images/icons/other/DownloadBlueIcon.svg') }}" alt="DownloadBlueIcon">
            <span class="text-font-weight-300 text-font-size-16">Tải xuống</span>
          </div>
        </div>
      </div>
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
              <div class="col-md-4">
                <img src="{{ asset('images/icons/other/DocumentModalIcon.svg') }}" alt="DocumentModalIcon">
              </div>
              <!-- Phần bên phải (form) -->
              <div class="col-md-8 pl-2">
                <p class="text-font-size-18 text-font-weight-700 text-white ml-2 mb-2">Vui lòng đăng ký thông tin để nhận tài liệu!</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Họ và tên phụ huynh">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Số điện thoại phụ huynh">
                  </div>
                  <button type="submit" class="btn btn-block custom-button">
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

</script>
@endsection
