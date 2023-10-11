@extends('layouts.main')
@section('og-title')
Product Pro
@endsection
@section('content')
<div class="product-pro">
  <section class="pro-header-banner">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-5 title-banner px-0">
          <div class="center">
            <p class="text-white text-font-size-40 text-font-weight-700 txt-banner-pro">EDUPIA PRO</p>
            <p class="text-white text-font-size-36 text-font-weight-700 line-height-44 des-banber-pro1">Cán đích điểm
              10 tiếng Anh
              <br />
              cùng gia sư trực tuyến hàng đầu
            </p>
            <p class="text-white text-font-size-20 text-font-weight-700 des-banner-pro2">
              Con tự tin chinh phục các kỳ thi tiếng Anh quan trọng cùng gia sư chất lượng cao, có thành
              tích giảng dạy xuất sắc.
            </p>
          </div>
        </div>
        <div class="col-lg-7 position-relative">
          <div class="img-banner">
            <img src="{{ asset('images/imgs/product/pro-banner.png') }}" class="img-fluid" alt="img banner" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-register">
    <div class="container">
      <div class="edupia-container-lg bg-purple div-register">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-register">
              <img class="img-fluid" src="{{ asset('images/imgs/product/pro-register.png') }}" alt="img register" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="div-form-register">
              <form>
                <p class="text-center text-white text-font-size-26 text-font-weight-600 mb-0">Học thử miễn phí ngay hôm
                  nay</p>
                <p class="text-center text-white text-font-size-18 text-font-weight-400 mb-3">Để lại thông tin để ban
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
                  <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký học thử</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-question">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-black-300 text-font-size-36 text-font-weight-700 text-center">Ba mẹ lo lắng tìm gia sư
                tiếng Anh cho con vì?</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="position-relative mt-3">
              <img src="{{ asset('images/imgs/product/pro-question.png') }}" class="img-fluid" alt="img question" />
              <span class="question-1 position-absolute text-font-size-18 text-font-weight-600 text-white">
                Bản thân bố mẹ không biết tiếng Anh muốn tìm<br /> gia sư giỏi dạy con
              </span>
              <span class="question-2 position-absolute text-font-size-18 text-font-weight-600 text-white">
                Giúp con nâng cao điểm số, theo kịp bạn bè trên lớp
              </span>
              <span class="question-3 position-absolute text-font-size-18 text-font-weight-600 text-white">
                Lớp học thêm quá đông thầy cô không thể sát<br /> sao đến từng học sinh
              </span>
              <span class="question-4 position-absolute text-font-size-18 text-font-weight-600 text-white">
                Mong muốn thầy cô tạo thói quen và truyền cảm <br /> hứng học tiếng Anh cho con
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-about bg-violet-100">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-7">
            <div class="content-about">
              <p class="text-white text-font-size-36 text-font-weight-700 line-height-44">
                Đừng lo, có lớp gia sư EDUPIA PRO <br />sẽ giải quyết trăn trở của ba mẹ
              </p>
              <div class="item-about">
                <p class="text-yellow-700 text-font-size-24 text-font-weight-700">
                  Bài Giảng Sinh Động, Hấp Dẫn
                </p>
                <p class="text-white text-font-size-18 text-font-weight-400">
                  Sử dụng nhiều hình ảnh, ví dụ trực quan. Nhiều hoạt động, trò chơi được lồng ghép vào buổi học.
                </p>
              </div>
              <div class="item-about">
                <p class="text-yellow-700 text-font-size-24 text-font-weight-700">
                  Đội Ngũ Gia Sư Chuyên Môn Cao
                </p>
                <p class="text-white text-font-size-18 text-font-weight-400">
                  Đội ngũ gia sư có trình độ chuyên môn cao, kỹ năng sư phạm tốt. Có khả năng nắm bắt tâm lý học sinh,
                  và khơi gợi đam mê ngoại ngữ.
                </p>
              </div>
              <div class="item-about">
                <p class="text-yellow-700 text-font-size-24 text-font-weight-700">
                  Cam Kết Đầu Ra Chuẩn Cambridge
                </p>
                <p class="text-white text-font-size-18 text-font-weight-400">
                  Chất lượng là ưu tiên hàng đầu trong lớp học gia sư Edupia, chương trình thiết kế giúp con đạt chuẩn
                  đầu ra theo hệ Cambridge quốc tế.
                </p>
              </div>
              <div class="text-left mt-5">
                <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký học thử</button>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="position-relative img-about">
              <img src="{{ asset('images/imgs/product/pro-about.png') }}" alt="img about" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-class">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-black text-font-size-36 text-font-weight-700 text-center">Con sẽ nhận được gì sau lớp học
                gia sư Edupia Pro</p>
            </div>
          </div>
          <div class="col-lg-12 content-class">
            <div class="row">
              <div class="col-lg-6">
                <div class="position-relative video-class" id="video1">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/pro-img-class.png') }}" alt="img class" />
                  <div class="play-button-post" onclick="showVideo('video1')"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div>
                  <div class="list-item-result">
                    <ul>
                      <li class="text-font-size-18 text-black text-font-weight-400">
                        Con bứt phá điểm số trên lớp, tự tin đạt điểm 9+ tiếng Anh dễ dàng
                      </li>
                      <li class="text-font-size-18 text-black text-font-weight-400">
                        Hình thành phản xạ nghe, nói tự nhiên, giao tiếp thành thạo tiếng Anh
                      </li>
                      <li class="text-font-size-18 text-black text-font-weight-400">
                        Ôn tập, rèn luyện và phát triển toàn diện 4 kỹ năng nghe - nói - đọc - viết
                      </li>
                      <li class="text-font-size-18 text-black text-font-weight-400">
                        Con yêu thích học, tự giác học tiếng Anh mà không cần ba mẹ nhắc nhở
                      </li>
                      <li class="text-font-size-18 text-black text-font-weight-400">
                        Tham gia các dự án, cuộc thi hùng biện tiếng Anh để cọ xát, đánh giá năng lực cùng
                        bạn bè
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-procedure">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-black text-center text-font-size-36 text-font-weight-700">
                Phương pháp giảng dạy chuẩn Quốc tế EPAS
              </p>
              <p class="text-center text-black text-font-size-18 text-font-weight-400">
                E-P-A-S là phương pháp dạy và học tiếng Anh toàn diện tiên tiến nhất được<br />
                áp dụng tại các trường quốc tế hiện tại
              </p>
            </div>
          </div>
          <div class="col-lg-12 px-0">
            <div>
              <div class="menu-tabs">
                <ul class="nav nav-pills justify-content-between" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active class-btn-e" id="pills-home-tab" data-toggle="pill"
                      data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                      aria-selected="true">
                      E - Engage
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-p" id="pills-profile-tab" data-toggle="pill"
                      data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                      aria-selected="false">
                      P - Present & Study
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-a" id="pills-contact-tab" data-toggle="pill"
                      data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                      aria-selected="false">
                      A - Active
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link class-btn-s" id="pills-learning-tab" data-toggle="pill"
                      data-target="#pills-learning" type="button" role="tab" aria-controls="pills-learning"
                      aria-selected="false">
                      Self-Learning
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container">
          <div class="edupia-container-lg">
            <div class="row">
              <div class="col-lg-6">
                <div class="pr-3">
                  <p class="text-violet-100 text-font-size-40 text-font-weight-400">E - Engage</p>
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
                  <img src="{{ asset('images/imgs/product/pro-e.png') }}" class="img-fluid" alt="img procedure" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="container">
          <div class="edupia-container-lg">
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
        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="container">
          <div class="edupia-container-lg">
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
      </div>
      <div class="tab-pane fade" id="pills-learning" role="tabpanel" aria-labelledby="pills-learning-tab">
        <div class="container">
          <div class="edupia-container-lg">
            <div class="row">
              <div class="col-lg-6">
                <div class="pr-3">
                  <p class="text-violet-100 text-font-size-40 text-font-weight-400">Self-Learning</p>
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
                  <img src="{{ asset('images/imgs/product/pro-s.png') }}" class="img-fluid" alt="img procedure" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-teacher">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <p class="text-center text-black text-font-size-36 text-font-weight-600">
              Ba mẹ yên tâm về đội Ngũ Gia Sư Uy Tín, Chất Lượng
            </p>
            <p class="text-center text-black text-font-size-18 text-font-weight-400">
              Toàn bộ giáo viên tại EDUPIA PRO được chọn lọc kĩ lưỡng từ các trường sư phạm, ngoại ngữ hàng đầu
              trên<br />
              toàn quốc, và đặc biệt nhiều kinh nghiệm trong chinh chiến các bài thi Học Sinh Giỏi, chuyển cấp
              THCS,<br />
              THPT và IELTS.
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
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc2.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc3.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc4.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
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
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc2.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc3.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc4.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
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
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc2.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc3.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card border-0" style="width: 100%;">
                            <div class="d-flex justify-content-center w-100 bg-violet-100 img-card-slide">
                              <img class="card-img img-fluid" src="{{ asset('images/imgs/product/pro-nvmc4.png') }}"
                                alt="Card image cap">
                            </div>
                            <div class="card-body pl-0 pr-0">
                              <h5
                                class="text-center card-title text-black-100 text-font-size-20 text-font-weight-600 mb-0">
                                <span class="text-font-weight-400">Cô</span> Ngô Võ Minh Châu
                              </h5>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  1.5 năm kinh nghiệm gia sư Tiếng Anh online cho học sinh Tiểu học
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Ngoại ngữ: Chứng chỉ 6.5 IELTS
                                </span>
                              </div>
                              <div class="card-text mt-2 d-flex text-left">
                                <div>
                                  <i class="dot"></i>
                                </div>
                                <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                                  Cộng tác viên giám sát chất lượng, đào tạo giáo viên tại Edupia Tutor
                                </span>
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
    </div>
  </section>
  <section class="pro-postshare">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12 title-postshare">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600">
                Chia sẻ của phụ huynh, học sinh về EDUPIA
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 px-5">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="videopost1">
                      <img class="card-img" src="{{ asset('images/imgs/product/pro-post1.png') }}" alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('videopost1')"></div>
                    </div>
                    <div class="card-body">
                      <h5 class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                        Chị Nguyễn Khánh Ly
                      </h5>
                      <p class="text-center text-font-size-16 text-font-weight-600">
                        Nhân viên Kế Toán
                      </p>
                      <div class="text-center list-star">
                        <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều. Ngoài ra
                        với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao tiếp
                        tiếng Anh với người khác"
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 px-5">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="videopost2">
                      <img class="card-img" src="{{ asset('images/imgs/product/pro-post2.png') }}" alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('videopost2')"></div>
                    </div>
                    <div class="card-body">
                      <h5 class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                        Chị Nguyễn Khánh Ly
                      </h5>
                      <p class="text-center text-font-size-16 text-font-weight-600">
                        Nhân viên Kế Toán
                      </p>
                      <div class="text-center list-star">
                        <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều. Ngoài ra
                        với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao tiếp
                        tiếng Anh với người khác"
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
  <section class="pro-slide-post">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
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
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost1.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 px-5">
                        <div class="item-post">
                          <div class="card border-0" style="width: 100%;">
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost2.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
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
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost1.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 px-5">
                        <div class="item-post">
                          <div class="card border-0" style="width: 100%;">
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost1.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
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
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost1.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 px-5">
                        <div class="item-post">
                          <div class="card border-0" style="width: 100%;">
                            <img class="card-img img-post-slide"
                              src="{{ asset('images/imgs/product/pro-slidepost1.png') }}" alt="Card image cap">
                            <div class="card-body">
                              <h5
                                class="text-center card-title text-violet-100 text-font-size-20 text-font-weight-600 mb-0">
                                Chị Nguyễn Khánh Ly
                              </h5>
                              <p class="text-center text-font-size-16 text-font-weight-600">
                                Nhân viên Kế Toán
                              </p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-center text-font-size-18 text-font-weight-400">
                                "Giáo viên tận tâm, dạy dễ hiểu nên điểm số Thái Anh nhà mình đã cải thiện lên nhiều.
                                Ngoài ra
                                với mô hình lớp học này, cháu còn được thực hành nhiều hơn nên bây giờ rất tự tin giao
                                tiếp
                                tiếng Anh với người khác"
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
  <section class="pro-award">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="col-lg-12">
          <div class="title-award">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-1.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-2.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
                            <img class="card-img-top" src="{{ asset('images/imgs/homepage/prize-3.png') }}"
                              alt="Card image cap">
                            <div class="card-body mt-5">
                              <h5
                                class="card-title text-blue-primary text-font-size-20 text-center text-font-weight-700 mb-4">
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
  <section class="pro-verify">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
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
                        <img class="img-fluid" src="{{ asset('images/imgs/product/pro-verify2.png') }}"
                          alt="img class" />
                        <div class="play-button-post" onclick="showVideo('videoverify2')"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="des-video-verify">
              <p class="text-center text-font-size-26 text-font-weight-700">
                VTV đánh giá Edupia là khóa học DUY NHẤT đồng hành giúp hơn 1 TRIỆU học sinh<br /> từ yếu kém lên khá,
                giỏi Tiếng Anh
              </p>
            </div>
          </div>
          <div class="col-lg-12 slide-social">
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
          <div class="col-lg-12 chicken-div-verify">
            <div class="row">
              <div class="col-lg-7">
                <div class="content-chicken-txt">
                  <p class="text-left text-violet-300 text-font-size-48 text-font-weight-600 line-height-44 mb-2">
                    Chỉ từ 78k/tháng
                  </p>
                  <p class="text-left text-black-100 text-font-size-36 text-font-weight-600">
                    Hoàn tiền 100% nếu không tiến bộ
                    sau 3 tháng
                  </p>
                  <p
                    class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description pr-5">
                    EDUPIA mang lại sự hài lòng và an tâm tuyệt đối cho hàng ngàn phụ huynh.
                  </p>
                  <div>
                    <button class="btn btn-primary more-btn mt-4 btn-register">Đăng ký học thử</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="text-left">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/pro-gd.png') }}" alt="img banner bottom" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pro-register bottom-register">
    <div class="container">
      <div class="edupia-container-lg bg-purple div-register">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-register">
              <img class="img-fluid" src="{{ asset('images/imgs/product/pro-register.png') }}" alt="img register" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="div-form-register">
              <form>
                <p class="text-center text-white text-font-size-26 text-font-weight-600 mb-0">Học thử miễn phí ngay hôm
                  nay</p>
                <p class="text-center text-white text-font-size-18 text-font-weight-400 mb-3">Để lại thông tin để ban
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
                  <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký học thử</button>
                </div>
              </form>
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

  function showVideoPost(idHtml) {
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
</script>
@endpush