@extends('layouts.main')
@section('og-title')
Product Extra
@endsection
@section('content')
<div class="product-extra">
  <section class="extra-header-banner">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-5 col-12 title-banner">
          <div class="center">
            <p class="text-black text-font-size-36 text-font-weight-700 line-height-44">
              EDUPIA EXTRA: Gói học tập<br /> toàn diện cho học sinh tiểu học
            </p>
            <p class="text-black text-font-size-18 text-font-weight-400 des-banner">
              Gói kết hợp giữa các chương trình học online và hộp sản phẩm tiếng Anh bao gồm: truyện
              tranh, trò chơi, flashcard, tạo cho con cảm hứng học để đạt kết quả tốt hơn.
            </p>
          </div>
        </div>
        <div class="col-lg-7 col-12 position-relative">
          <div class="img-banner">
            <img src="{{ asset('images/imgs/product/extra-banner.png') }}" class="img-fluid" alt="img banner" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="extra-option-product">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600 mb-0">
                Cùng khám phá các sản phẩm trong EDUPIA EXTRA
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div>
              <div class="menu-tabs">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active class-btn-math" id="pills-home-tab" data-toggle="pill"
                      data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                      aria-selected="true">
                      Edupia Toán
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-vietnam" id="pills-profile-tab" data-toggle="pill"
                      data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                      aria-selected="false">
                      EDUPIA Tiếng Việt
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-learning" id="pills-contact-tab" data-toggle="pill"
                      data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                      aria-selected="false">
                      EDUPIA Learning Pack
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="extra-tab-content">
    <div class="tab-content" id="pills-tabContent">
      <!-- Toan -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        @include('pages.product-extra-math')
      </div>
      <!-- Tieng viet -->
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @include('pages.product-extra-vietnamese')
      </div>
      <!-- Learning pack  -->
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @include('pages.product-extra-learningpack')
      </div>
    </div>
  </section>
</div>
@endsection
@push('scripts')
<script>
  function showVideo(idHtml) {
    $(`#${idHtml} img`).remove();
    $(`#${idHtml} div`).remove();
    // create a new responsive video container
    const videoID = "EVXFzZ2qA8g";

    const responsiveVideoContainer = $("<div></div>").addClass(
      "embed-responsive embed-responsive-16by9");

    // create the iFrame with the video embed
    const videoIframe = $("<iframe></iframe>").addClass("embed-responsive-item");

    videoIframe.attr("src", `https://www.youtube.com/embed/${videoID}?autoplay=1`);
    videoIframe.attr("allow", "autoplay");

    // add the iFrame to the video container
    responsiveVideoContainer.append(videoIframe);

    // add the video container to the parent container
    $(`#${idHtml}`).append(responsiveVideoContainer);
  }

  const videoIframe = $("<iframe></iframe>").addClass("embed-responsive-item");
  videoIframe.attr("src", 'https://www.youtube.com/embed/${videoID}?autoplay=1');
  videoIframe.attr("allow", "autoplay");
</script>
@endpush