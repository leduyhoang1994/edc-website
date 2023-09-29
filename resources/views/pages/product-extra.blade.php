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
                    <button class="nav-link active class-btn-math" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                      Edupia Toán
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-vietnam" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                      EDUPIA Tiếng Việt
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-learning" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
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
                <div class="col-lg-12 mt-5">
                  <div class="row mt-5">
                    <div class="col-lg-3">
                      <div>
                        <div class="card border-0 align-items-center" style="width: 100%;">
                          <img class="card-img icon-hand" src="{{ asset('images/imgs/product/hand.svg') }}" alt="Card image cap">
                          <div class="card-body p-0">
                            <p class="text-blue-930 text-center card-title text-font-size-24 text-font-weight-600 mb-0">
                              10.000+
                            </p>
                            <p class="text-font-size-18 text-font-weight-400 text-center">Học sinh tham gia</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div>
                        <div class="card border-0 align-items-center" style="width: 100%;">
                          <img class="card-img icon-hand" src="{{ asset('images/imgs/product/scoreA.svg') }}" alt="Card image cap">
                          <div class="card-body p-0">
                            <p class="text-blue-930 text-center card-title text-font-size-24 text-font-weight-600 mb-0">
                              95%
                            </p>
                            <p class="text-font-size-18 text-font-weight-400 text-center">Học sinh cải thiện điểm số</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div>
                        <div class="card border-0 align-items-center" style="width: 100%;">
                          <img class="card-img icon-hand" src="{{ asset('images/imgs/product/videoCount.svg') }}" alt="Card image cap">
                          <div class="card-body p-0">
                            <p class="text-blue-930 text-center card-title text-font-size-24 text-font-weight-600 mb-0">
                              5.000+
                            </p>
                            <p class="text-font-size-18 text-font-weight-400 text-center">Video bài giảng và tập luyện
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div>
                        <div class="card border-0 align-items-center" style="width: 100%;">
                          <img class="card-img icon-hand" src="{{ asset('images/imgs/product/book.svg') }}" alt="Card image cap">
                          <div class="card-body p-0">
                            <p class="text-blue-930 text-center card-title text-font-size-24 text-font-weight-600 mb-0">
                              100%
                            </p>
                            <p class="text-font-size-18 text-font-weight-400 text-center">
                              Được thiết kế bài giảng<br /> và đánh giá kết quả riêng
                            </p>
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
        <section class="math-reason mt-5">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-5">
                  <div>
                    <img class="img-fluid" src="{{ asset('images/imgs/product/extra-reason.png') }}" alt="img reason" />
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="pl-4">
                    <p class="text-white text-font-size-36 text-font-weight-700">4 lý do Con học giỏi toán hơn với
                      EDUPIA MATH</p>
                    <div class="list-item-result">
                      <ul>
                        <li class="text-font-size-18 text-white text-font-weight-500">
                          Đội ngũ giáo viên giỏi, đầy nhiệt huyết từ các trường chuyên và quốc tế
                        </li>
                        <li class="text-font-size-18 text-white text-font-weight-500">
                          Cam kết 100% học sinh tiến bộ về năng lực và điểm số
                        </li>
                        <li class="text-font-size-18 text-white text-font-weight-500">
                          Phương pháp giáo dục RME “Toán học gắn liền thực tiễn”
                        </li>
                        <li class="text-font-size-18 text-white text-font-weight-500">
                          Giáo vụ chuyên môn cao đồng hành 24/7 để hướng dẫn học sinh tận tình
                        </li>
                      </ul>
                    </div>
                    <div class="text-left">
                      <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký tư vấn</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="math-rme">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12">
                  <div>
                    <p class="text-center text-font-size-36 text-font-weight-600 text-black">
                      Phương pháp dạy học RME (Realistic Math Education)<br />
                      giúp con ứng dụng ngay kiến thức toán vào thực tế
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 mt-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div>
                        <img class="img-fluid" src="{{ asset('images/imgs/product/extra-rme1.png') }}" alt="img rme" />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div>
                        <img class="img-fluid" src="{{ asset('images/imgs/product/extra-rme2.png') }}" alt="img rme" />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div>
                        <img class="img-fluid" src="{{ asset('images/imgs/product/extra-rme3.png') }}" alt="img rme" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mt-5">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký tư vấn</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="math-slide-teacher">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12">
                  <p class="text-center text-black text-font-size-36 text-font-weight-600 line-height-44">
                    Đội ngữ giáo viên giàu kinh nghiệm<br />
                    đồng hành cùng con
                  </p>
                </div>
                <div class="col-lg-12">
                  <div>
                    <div class="slider-native-teams">
                      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators align-items-center">
                          <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-1.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Th.S Nguyễn Thủy Chung
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Phó trưởng khoa Giáo Dục Tiểu Học - Trường ĐHSP Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        17 năm kinh nghiệm giảng dạy và nghiên cứu về giáo dục Toán học
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Xây dựng chương trình môn Toán và Toán - Tiếng Anh cho các trường tiểu học
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-2.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      T.S Thiều Quang Tùng
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Nhiều năm kinh nghiệm bồi dưỡng học sinh Giỏi HSG Quốc Gia và Quốc Tế
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giảng viên trường ĐH Bách Khoa Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chuyên Toán trường THPT chuyên Hà Nội - Amsterdam
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-3.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Phạm Kiểu Trà My
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chủ nhiệm - trường Tiểu học Đoàn Thị Điểm
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Ba giáo viên giỏi quận Nam Từ Liêm năm 2019 - 2020
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải A sáng kiến kinh nghiệm quận Nam Từ Liêm năm 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide-cayman">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-4.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Nguyễn Thuỳ Trang
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        10 năm kinh nghiệm giảng dạy tại các trường chuyên
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Tốt nghiệp loại Giỏi - ĐH Sư Phạm Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Nhì cuộc thi giáo viên giỏi cấp Quận năm 2019 – 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-1.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Th.S Nguyễn Thủy Chung
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Phó trưởng khoa Giáo Dục Tiểu Học - Trường ĐHSP Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        17 năm kinh nghiệm giảng dạy và nghiên cứu về giáo dục Toán học
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Xây dựng chương trình môn Toán và Toán - Tiếng Anh cho các trường tiểu học
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-2.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      T.S Thiều Quang Tùng
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Nhiều năm kinh nghiệm bồi dưỡng học sinh Giỏi HSG Quốc Gia và Quốc Tế
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giảng viên trường ĐH Bách Khoa Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chuyên Toán trường THPT chuyên Hà Nội - Amsterdam
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-3.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Phạm Kiểu Trà My
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chủ nhiệm - trường Tiểu học Đoàn Thị Điểm
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Ba giáo viên giỏi quận Nam Từ Liêm năm 2019 - 2020
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải A sáng kiến kinh nghiệm quận Nam Từ Liêm năm 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide-cayman">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-4.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Nguyễn Thuỳ Trang
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        10 năm kinh nghiệm giảng dạy tại các trường chuyên
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Tốt nghiệp loại Giỏi - ĐH Sư Phạm Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Nhì cuộc thi giáo viên giỏi cấp Quận năm 2019 – 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-1.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Th.S Nguyễn Thủy Chung
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Phó trưởng khoa Giáo Dục Tiểu Học - Trường ĐHSP Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        17 năm kinh nghiệm giảng dạy và nghiên cứu về giáo dục Toán học
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Xây dựng chương trình môn Toán và Toán - Tiếng Anh cho các trường tiểu học
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-2.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      T.S Thiều Quang Tùng
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Nhiều năm kinh nghiệm bồi dưỡng học sinh Giỏi HSG Quốc Gia và Quốc Tế
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giảng viên trường ĐH Bách Khoa Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chuyên Toán trường THPT chuyên Hà Nội - Amsterdam
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-3.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Phạm Kiểu Trà My
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giáo viên chủ nhiệm - trường Tiểu học Đoàn Thị Điểm
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Ba giáo viên giỏi quận Nam Từ Liêm năm 2019 - 2020
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải A sáng kiến kinh nghiệm quận Nam Từ Liêm năm 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card border-0" style="width: 100%;">
                                  <div class="d-flex justify-content-center w-100 bg-blue-primary img-card-slide-cayman">
                                    <img class="card-img img-fluid" src="{{ asset('images/imgs/product/math-slide-4.png') }}" alt="Card image cap">
                                  </div>
                                  <div class="card-body pl-0 pr-0">
                                    <h5 class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                      Cô Nguyễn Thuỳ Trang
                                    </h5>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        10 năm kinh nghiệm giảng dạy tại các trường chuyên
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Tốt nghiệp loại Giỏi - ĐH Sư Phạm Hà Nội
                                      </span>
                                    </div>
                                    <div class="card-text mt-2 d-flex text-left">
                                      <div>
                                        <i class="dot"></i>
                                      </div>
                                      <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                        Giải Nhì cuộc thi giáo viên giỏi cấp Quận năm 2019 – 2020
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mt-5 pt-4">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký tư vấn</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <section class="math-post">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <p class="text-center text-font-size-36 text-font-weight-600 line-height-44">
                    Phụ huynh nói gì về EDUPIA MATH?
                  </p>
                </div>
                <div class="col-lg-12">
                  <div class="slider-native-teams">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators align-items-center">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-1.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600 text-black">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Mi Mi nhà mình năm nay lên lớp 3, không muốn bắt con học quá nhiều nhưng mình
                                      biết toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa
                                      học tập các kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư
                                      duy và Edupia Math hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là
                                      giáo viên Giỏi nên con được tiếp cận với chất lượng giáo dục cao “
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-2.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng
                                      lên lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký
                                      cho con học ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự
                                      tiến bộ của con. Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con
                                      yếu là các cô thông báo luyện tập luôn nên giờ mẹ cũng yên tâm ”
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-1.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600 text-black">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Mi Mi nhà mình năm nay lên lớp 3, không muốn bắt con học quá nhiều nhưng mình
                                      biết toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa
                                      học tập các kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư
                                      duy và Edupia Math hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là
                                      giáo viên Giỏi nên con được tiếp cận với chất lượng giáo dục cao “
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-2.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng
                                      lên lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký
                                      cho con học ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự
                                      tiến bộ của con. Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con
                                      yếu là các cô thông báo luyện tập luôn nên giờ mẹ cũng yên tâm ”
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-1.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600 text-black">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Mi Mi nhà mình năm nay lên lớp 3, không muốn bắt con học quá nhiều nhưng mình
                                      biết toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa
                                      học tập các kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư
                                      duy và Edupia Math hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là
                                      giáo viên Giỏi nên con được tiếp cận với chất lượng giáo dục cao “
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 px-5">
                              <div class="item-post">
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img img-post-slide" src="{{ asset('images/imgs/product/math-post-2.png') }}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                                      Chị Dung (Mẹ Mi Mi)
                                    </h5>
                                    <p class="text-center text-font-size-16 text-font-weight-600">
                                      Nhân viên Kế Toán
                                    </p>
                                    <div class="text-center my-1">
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                      <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                    </div>
                                    <p class="text-black text-center text-font-size-16 text-font-weight-400">
                                      “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng
                                      lên lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký
                                      cho con học ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự
                                      tiến bộ của con. Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con
                                      yếu là các cô thông báo luyện tập luôn nên giờ mẹ cũng yên tâm ”
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
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
        <section class="math-family">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-4">
                  <div>
                    <img class="img-fluid" src="{{ asset('images/imgs/product/math-family.png') }}" alt="img family" />
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="content-chicken-txt">
                    <p class="text-left text-blue-primary text-font-size-48 text-font-weight-600 line-height-44 mb-2">
                      Chỉ từ 100k/tháng
                    </p>
                    <p class="text-left text-black-100 text-font-size-36 text-font-weight-600">
                      Hoàn tiền 100% nếu không tiến bộ
                    </p>
                    <p class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description pr-5">
                      EDUPIA mang lại sự hài lòng và an tâm tuyệt đối cho hàng ngàn phụ huynh.
                      <br />
                      Chúng tôi cam kết hoàn 100% học phí nếu sau 3 tháng con không tiến bộ.
                    </p>
                    <div>
                      <button class="btn btn-primary more-btn mt-4 btn-register">Đăng ký tư vấn</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="math-register mb-5 pb-5">
          <div class="container">
            <div class="edupia-container-lg bg-blue-930 div-register">
              <div class="row">
                <div class="col-lg-6">
                  <div class="img-register">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/math-register.png') }}" alt="img register" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="div-form-register">
                    <form>
                      <p class="text-center text-white text-font-size-26 text-font-weight-600 mb-0">Học thử miễn phí
                        ngay hôm
                        nay</p>
                      <p class="text-center text-white text-font-size-18 text-font-weight-400 mb-3">Để lại thông tin để
                        ban
                        giáo vụ
                        có thể hỗ trợ phụ huynh lên lịch và chọn khóa học phù hợp</p>
                      <div class="form-group">
                        <input class="form-control input-customer" type="text" placeholder="Họ tên phụ huynh" />
                      </div>
                      <div class="form-group">
                        <input class="form-control input-customer" type="number" placeholder="Số điện thoại" />
                      </div>
                      <div class="form-group">
                        <input class="form-control input-customer" type="text" placeholder="Địa chỉ" />
                      </div>
                      <div class="form-group">
                        <input class="form-control input-customer" type="text" placeholder="Năm sinh của con" />
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký ngay</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="math-award">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="col-lg-12">
                <div>
                  <p class="text-black text-center text-font-size-36 text-font-weight-700">
                    EDUPIA tự hào là chương trình tiếng Anh Tiểu học<br />
                    số 1 Việt Nam với thành tích xuất sắc
                  </p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mt-5">
                  <div class="wizard">
                    <!-- tab giai thuong -->
                    <div class="mb-5">
                      <div class="tab-content" id="main_form">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                          <div class="row">
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      The BrandLaureate SMEs BestBrands Award
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
                                      giới
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0 " style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Best Online English Teaching Product
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                          <div class="row">
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      The BrandLaureate SMEs BestBrands Award
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
                                      giới
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0 " style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Best Online English Teaching Product
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                          <div class="row">
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      The BrandLaureate SMEs BestBrands Award
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
                                      giới
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0 " style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Best Online English Teaching Product
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step4">
                          <div class="row">
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      The BrandLaureate SMEs BestBrands Award
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
                                      giới
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0 " style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Best Online English Teaching Product
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step5">
                          <div class="row">
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      The BrandLaureate SMEs BestBrands Award
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nhà cung cấp dịch vụ giáo dục trực tuyến xuất sắc nhất.Giải thưởng thương hiệu thế
                                      giới
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0 " style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Best Online English Teaching Product
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất.Giải thưởng thương hiệu toàn cầu
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-39">
                              <div>
                                <div class="card border-0" style="width: 100%;">
                                  <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}" alt="Card image cap">
                                  <div class="card-body mt-5">
                                    <h5 class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
                                      Top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </h5>
                                    <p class="card-text text-center text-font-size-18 text-font-weight-400">
                                      Nền tảng dữ liệu giáo dục toàn cầu - top 50 công ty Edtech nổi bật của Đông Nam Á
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <!-- tab giai thuong -->
                    <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
                            <span class="round-tab"></span>
                            <i>2022</i>
                          </a>
                        </li>
                        <li role="presentation" class="disabled">
                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                            <span class="round-tab"></span>
                            <i>2021</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
                            <span class="round-tab"></span>
                            <i>2020</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                          <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab">
                            <span class="round-tab"></span>
                            <i>2019</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                          <a href="#step4" data-toggle="tab" aria-controls="step5" role="tab">
                            <span class="round-tab"></span>
                            <i>2018</i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="math-verify">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12 mb-5">
                  <div class="title-verify">
                    <p class="text-black text-center text-font-size-36 text-font-weight-700">
                      Được kiểm chứng bởi truyền thông, <br /> báo chí toàn quốc</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="item-verify">
                        <div class="card border-0" style="width: 100%;">
                          <div class="position-relative video-class" id="videoverify1">
                            <img class="img-fluid" src="{{ asset('images/imgs/product/pro-verify1.png') }}" alt="img class" />
                            <div class="play-button-post" onclick="showVideo('videoverify1')"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="item-verify">
                        <div class="card border-0" style="width: 100%;">
                          <div class="position-relative">
                            <div class="position-relative video-class" id="videoverify2">
                              <img class="img-fluid" src="{{ asset('images/imgs/product/pro-verify2.png') }}" alt="img class" />
                              <div class="play-button-post" onclick="showVideo('videoverify2')"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="my-5">
                    <p class="text-center text-font-size-26 text-font-weight-700">
                      VTV đánh giá Edupia là khóa học DUY NHẤT đồng hành giúp hơn 1 TRIỆU học sinh<br /> từ yếu kém lên
                      khá,
                      giỏi Tiếng Anh
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 mb-5 pb-5">
                  <div class="marquee">
                    <div class="marquee-content">
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Vnexpress.svg') }}" alt="Vnexpress">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/GiaoDucThoiDai.svg') }}" alt="GiaoDucThoiDai">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VTV.svg') }}" alt="VTV">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/Cafebiz.svg') }}" alt="Cafebiz">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VnEconomy.svg') }}" alt="VnEconomy">
                      </div>
                      <div class="marquee-tag">
                        <img src="{{ asset('images/icons/homepage/VtcNews.svg') }}" alt="VtcNews">
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
    html(`<iframe class="embed-responsive-16by9" width="572" height="338" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
  }

</script>
@endpush
