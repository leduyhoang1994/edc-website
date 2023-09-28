@extends('layouts.main')
@section('og-title')
Product Extra
@endsection
@section('content')
<div class="product-extra">
  <section class="extra-header-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 title-banner">
          <div class="center">
            <p class="text-black text-font-size-36 text-font-weight-700 line-height-44">
              EDUPIA EXTRA: Gói học tập<br /> toàn diện cho học sinh tiểu học
            </p>
            <p class="text-black text-font-size-18 text-font-weight-400 mt-3">
              Gói kết hợp giữa các chương trình học online và hộp sản phẩm tiếng Anh bao gồm: truyện
              tranh, trò chơi, flashcard, tạo cho con cảm hứng học để đạt kết quả tốt hơn.
            </p>
          </div>
        </div>
        <div class="col-lg-7">
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
              <p class="text-center text-black text-font-size-36 text-font-weight-600">
                Cùng khám phá các sản phẩm trong EDUPIA EXTRA
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div>
              <div class="pt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
        <section class="math-study">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12">
                  <div class="math-study-title">
                    <p class="text-blue-primary text-font-size-36 text-font-weight-700 line-height-44 text-center">
                      EDUPIA MATH - Chương trình học toán<br /> online với giáo viên trường điểm
                    </p>
                    <p class="text-center text-black text-font-size-18 text-font-weight-400 p-630">
                      Edupia Math - Lớp học Toán online chất lượng cao với giáo viên giỏi hàng đầu từ các trường
                      điểm cho học sinh từ lớp 3-5. Chương trình với hình thức tương tác hoàn toàn mới mang đến trải
                      nghiệm và hiệu quả hơn cả 1 lớp học truyền thống.
                    </p>
                  </div>
                  
                </div>
                <div class="col-lg-12">
                  <div class="text-center position-relative" id="video_skill">
                    <img src="{{ asset('images/imgs/product/extra-math-video.png') }}" class="img-fluid" alt="img video" />
                    <div class="play-button cursor-pointer" onClick="showVideo('video_skill')"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-3">
                      <div>
                        <div class="card border-0 align-items-center" style="width: 100%;">
                          <img class="card-img icon-hand" src="{{ asset('images/imgs/product/hand.svg') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="text-center card-title text-black text-font-size-24 text-font-weight-600 mb-0">
                              10.000+
                            </p>
                            <p>Học sinh tham gia</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Tieng viet -->
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
          <div class="col-lg-6">
            <div class="pr-3">
              <p class="text-violet-100 text-font-size-40 text-font-weight-400">P - Present & Study</p>
              <p class="text-black text-font-size-36 text-font-weight-600">GIAI ĐOẠN TƯƠNG TÁC</p>
              <hr class="pro-hr" />
              <div class="list-item-result">
                <ul>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Xóa đi sự ngại ngùng và xa cách trong lớp học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Dẫn dắt tất cả học sinh hình thành tư duy về chủ đề học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Xóa đi sự ngại ngùng và xa cách trong lớp học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Dẫn dắt tất cả học sinh hình thành tư duy về chủ đề học
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div>
              <img src="{{ asset('images/imgs/product/pro-p.png') }}" class="img-fluid" alt="img procedure" />
            </div>
          </div>
        </div>
      </div>
      <!-- Learning pack  -->
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="col-lg-6">
            <div class="pr-3">
              <p class="text-violet-100 text-font-size-40 text-font-weight-400">A - Active</p>
              <p class="text-black text-font-size-36 text-font-weight-600">GIAI ĐOẠN TƯƠNG TÁC</p>
              <hr class="pro-hr" />
              <div class="list-item-result">
                <ul>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Xóa đi sự ngại ngùng và xa cách trong lớp học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Dẫn dắt tất cả học sinh hình thành tư duy về chủ đề học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Xóa đi sự ngại ngùng và xa cách trong lớp học
                  </li>
                  <li class="text-font-size-18 text-black text-font-weight-400">
                    Dẫn dắt tất cả học sinh hình thành tư duy về chủ đề học
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div>
              <img src="{{ asset('images/imgs/product/pro-a.png') }}" class="img-fluid" alt="img procedure" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('scripts')
<script>
  function showVideo(idHtml) {
    $(`#${idHtml}`).
      html(`<iframe class="embed-responsive-16by9" width="816" height="460" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
      )
  }

  function showVideoPost(idHtml) {
    $(`#${idHtml}`).
      html(`<iframe class="embed-responsive embed-responsive-16by9" width="526" height="341" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
      )
  }
</script>
@endpush