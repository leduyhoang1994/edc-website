@extends('layouts.main')
@section('og-title')
Tài liệu chi tiết
@endsection
@section('content')
<main class="document-detail">
  <section class="header-banner container-fluid">
    <div class="container edupia-mw-1230">
      <div class="row">
        <div class="col-4 px-0">
          <div class="book-cover">
            <img width="100%" src="{{ asset('images/imgs/other/book-cover.png') }}" alt="book-cover" />
          </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 pl-2">
          <div class="description">
            <p class="text-font-size-20 text-font-weight-600">Đâu là chương trình dạy học tiếng Anh Tiểu học chất lượng cao nên đầu tư cho con?</p>
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
            <button type="submit" class="btn btn-block custom-button py-2 mb-5">
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
            <img src="{{ asset('images/imgs/other/elipse-chicken.png') }}" alt="elipse-chicken" class="image1" />
            <img  src="{{ asset('images/imgs/other/coconut-tree.png') }}" alt="coconut-tree" class="image2" />

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
