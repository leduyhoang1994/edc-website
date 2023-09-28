@extends('layouts.main')
@section('og-title')
Product Extra
@endsection
@section('content')
<div class="product-extra">
  <section class="extra-header-banner">
    <div class="container content">
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
      <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
      <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <section class="vietnamese-study container-fluid">
          <div class="container banner">
            <div class="row">
              <div class="col-sm-6 d-flex align-items-center">
                <div class="text-white text-font-size-18 text-font-weight-400">
                  <div class="text-font-weight-700 text-font-size-36">
                    <p class="m-0 ">EDUPIA Tiếng Việt - Chương trình học</p>
                    <p class="m-0">tiếng Việt online với giáo viên trường điểm</p>
                  </div>
                  <p class="m-0 middle-text">
                    EDUPIA Tiếng Việt là chương trình học Tiếng Việt online với giáo viên giỏi hàng đầu tại Việt Nam cho học sinh từ lớp 1-5, tạo cho con sự hứng thú, yêu thích việc học và khám phá hơn.
                  </p>
                  <span class="btn-register text-font-weight-500">Đăng ký tư vấn</span>
                </div>
              </div>

              <div class="col-sm-6">
                <img class="w-100" src="{{ asset('images/imgs/product/vietnamese-banner.png') }}" alt="vietnamese-banner" />
              </div>

            </div>
          </div>
        </section>
        <section class="container vietnamese-more-info mx-auto">
          <div class="row">
            <div class="col-sm-5">
              <img class="w-100" src="{{ asset('images/imgs/product/kid-vietnamese.png') }}" alt="kid-vietnamese" />
            </div>
            <div class="col-sm-7 info">
              <div class="text-font-weight-700 text-font-size-36 title">
                <p class="m-0">Con thích học hơn với phương pháp</p>
                <p class="m-0">giảng dạy và hỗ trợ tận tâm </p>
              </div>
              <div>
                <ul class="ml-3 list-group text-font-size-18 text-font-weight-500">
                  <li>
                    <p>Bài giảng bám sát chương trình học SGK</p>
                  </li>
                  <li>
                    <p>Phương pháp dạy học VSA (Visual - Self Practice - Assesments)</p>
                  </li>
                  <li>
                    <p>Tương tác với giáo viên qua hình thức sống động</p>
                  </li>
                  <li>
                    <p>Báo cáo kết quả học tập cá nhân hóa theo tuần, tháng</p>
                  </li>
                  <li>
                    <p>Giáo viên theo sát trong suốt quá trình học</p>
                  </li>
                </ul>
                <span class="btn-register text-font-weight-500">Đăng ký tư vấn</span>
              </div>
            </div>
          </div>
        </section>
        <section class="teachers container edupia-mw-1230 px-0">
          <div class="row">
            <div class="col-sm text-center">
              <div class="text-font-weight-700 text-font-size-36">
                <p class="m-0">Đội ngữ giáo viên giàu kinh nghiệm </p>
                <p class="m-0">đồng hành cùng con</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/aboutus/avt-ceo.png') }}" alt="Card image cap">
                <div class="card-body pl-0 pr-0">
                  <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                    <span class="text-font-weight-400">Cô Hoàng Thùy Dương</span>
                  </h5>
                  <div class="card-text d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                      Cử nhân trường Đại học Sư phạm Hà Nội.
                    </span>
                  </div>
                  <div class="card-text d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">
                      Có nhiều năm kinh nghiệm giảng dạy các môn cấp Tiểu học.
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/aboutus/avt-adam.png') }}" alt="Card image cap">
                <div class="card-body pl-0 pr-0">
                  <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                    <span class="text-font-weight-400">Thầy</span> Adam Lewis
                  </h5>
                  <p class="text-black text-center text-font-size-18 text-font-weight-400">Giám đốc phát triển nội dung
                  </p>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
                      Giám đốc khối Digital của Viettel Telecom.</span>
                  </div>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
                      lĩnh vực viễn thông và nội dung số.</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/aboutus/avt-miller.png') }}" alt="Card image cap">
                <div class="card-body pl-0 pr-0">
                  <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                    <span class="text-font-weight-400">Cô</span> Jessica Miller
                  </h5>
                  <p class="text-black text-center text-font-size-18 text-font-weight-400">Cố vấn sư phạm</p>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
                      Giám đốc khối Digital của Viettel Telecom.</span>
                  </div>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
                      lĩnh vực viễn thông và nội dung số.</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/aboutus/avt-cayman.png') }}" alt="Card image cap">
                <div class="card-body pl-0 pr-0">
                  <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                    <span class="text-font-weight-400">Cô</span> Cayman Fitzhugh
                  </h5>
                  <p class="text-black text-center text-font-size-18 text-font-weight-400">Cô vấn sư phạm</p>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc Trung tâm VAS,
                      Giám đốc khối Digital của Viettel Telecom.</span>
                  </div>
                  <div class="card-text mt-4 d-flex text-left">
                    <div>
                      <i class="dot"></i>
                    </div>
                    <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh nghiệm trong
                      lĩnh vực viễn thông và nội dung số.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Learning pack  -->
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <section class="learning-pack-banner container-fluid">
          <div class="container banner">
            <div class="row">
              <div class="col-sm-6">
                <img class="w-100" src="{{ asset('images/imgs/product/leaning-pack-banner.png') }}" alt="leaning-pack-banner" />
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="text-white text-font-size-18 text-font-weight-400">
                  <p class="m-0 text-font-weight-700 text-font-size-36">Vừa chơi vừa học tiếng Anh với EDUPIA Learning Pack</p>
                  <p class="m-0  middle-text">EDUPIA Learning Package là gói học tập bao gồm các trò chơi, truyện tranh, sách giấy... tạo cảm hứng và xỏa bỏ nỗi sợ tiếng Anh cho con từ lớp 1 - 5 </p>
                  <div>
                    <span class="btn-register text-font-weight-500">Đăng ký tư vấn</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="edupia-mw-1230 container learning-pack-content">
          <div class="row">
            <div class="col-sm">
              <div class="text-center text-font-weight-700 text-font-size-36">
                <p>Tạo cảm hứng cho con học tiếng Anh với</p>
                <p>hình thức sống động</p>
              </div>
            </div>
          </div>
          <div class="row align-items-center text-font-size-20 w-75 mx-auto">
            <div class="col-sm-5">
              <img class="w-100" src="{{ asset('images/imgs/product/vocab-book.png') }}" alt="vocab-book" />
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
              <p class="text-font-size-36 text-font-weight-700 text-blue-primary mb-2">Sách từ vựng</p>
              <p class="text-font-weight-400">
                Sách từ vựng giúp trẻ luyện thêm bài tập nhằm nắm vững kiến thức về từ vựng và mẫu câu học sinh đã được học ở trên ứng dụng.
              </p>
            </div>
          </div>
          <div class="row align-items-center text-font-size-18 w-75 mx-auto">
            <div class="col-sm-5">
              <p class="text-font-size-36 text-font-weight-700 text-blue-primary mb-2">Sách ngữ pháp</p>
              <p class="text-font-weight-400">
                Sách ngữ pháp cung cấp các bài tập thực tế giúp con luyện tập làm các mẫu câu cơ bản đến phức tạp trong các bài thi.
              </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
              <img class="w-100" src="{{ asset('images/imgs/product/structure-book.png') }}" alt="structure-book" />
            </div>
          </div>
          <div class="row align-items-center text-font-size-18">
            <div class="col-sm-6">
              <img class="w-100" src="{{ asset('images/imgs/product/story-book.png') }}" alt="story-book" />
            </div>
            <div class="col-sm-6">
              <p class="text-font-size-36 text-font-weight-700 text-blue-primary mb-2">10 quyển truyện tranh</p>
              <p class="text-font-weight-400">
                Truyện tranh song ngữ Edupia được thiết kế giúp học sinh vận dụng ngay kiến thức vừa học trong thực tế. Ngoài là, bố mẹ dễ dàng học cùng con.
              </p>
            </div>
          </div>
          <div class="row align-items-center text-font-size-18 w-75 mx-auto">
            <div class="col-sm-6">
              <p class="text-font-size-36 text-font-weight-700 text-blue-primary mb-2">2 bộ Flashcard</p>
              <p class="text-font-weight-400">
                Truyện tranh song ngữ Edupia được thiết kế giúp học sinh vận dụng ngay kiến thức vừa học trong thực tế. Ngoài là, bố mẹ dễ dàng học cùng con.
              </p>
            </div>
            <div class="col-sm-6">
              <img class="w-100" src="{{ asset('images/imgs/product/flashcard-box.png') }}" alt="flashcard-box" />
            </div>
          </div>
          <div class="row align-items-center text-font-size-18">
            <div class="col-sm-6">
              <img class="w-100" src="{{ asset('images/imgs/product/boardgame.png') }}" alt="boardgame" />
            </div>
            <div class="col-sm-6">
              <p class="text-font-size-36 text-font-weight-700 text-blue-primary mb-2">EDUPIA Boardgame</p>
              <p class="text-font-weight-400">
                Giúp con cùng các bạn vui chơi gắn kết với trò chơi trí tuệ vô cùng hấp dẫn. Từ đó, Giảm nguy cơ trẻ bị cận thị và bị ảnh hưởng xấu từ các nội dung tiêu cực trên điện thoại, ti vi.
              </p>
            </div>
          </div>
          <div class="row mx-auto middle-img">
            <div class="col-sm">
              <p class="text-font-size-36 text-font-weight-700 text-center">Con chưa bao giờ học tiếng Anh vui đến thế</p>
              <img class="w-100" src="{{ asset('images/imgs/product/person.png') }}" alt="person" />
            </div>
          </div>
          <div class="row middle-banner">
            <div class="col-sm-7">
              <img class="w-100" src="{{ asset('images/imgs/product/middle-banner-pic.png') }}" alt="middle-banner-pic" />
            </div>
            <div class="col-sm-5 form-register">
              <div class="text-center text-white mx-auto">
                <p class="text-font-size-48 text-font-weight-600 mb-3">
                  Chỉ với 485k/bộ
                </p>
                <p class="mb-1 text-font-size-26 text-font-weight-600">Đăng ký đặt hàng</p>
                <div class="mb-3 text-font-weight-400">
                  <p class="m-0">Số lượng có hạn, ba mẹ nhanh tay đặt hàng để</p>
                  <p class="m-0">tạo cảm hứng cho con học tiếng Anh nhé!</p>
                </div>

                <form class="mx-auto">
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Họ tên phụ huynh">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Số điện thoại phụ huynh">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-rounded" placeholder="Địa chỉ">
                  </div>
                  <button type="submit" class="btn btn-block custom-button mx-auto">
                    <span class="text-font-weight-600 text-font-size-18 text-white">Đăng ký ngay</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </section>
        <section class="pro-award">
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
        <section class="pro-verify">
          <div class="container">
            <div class="edupia-container-lg">
              <div class="row">
                <div class="col-lg-12 mb-5">
                  <div class="title-verify">
                    <div class="text-black text-center text-font-size-36 text-font-weight-700">
                      <p class="m-0">Được kiểm chứng bởi truyền thông,</p>
                      <p class="m-0">báo chí toàn quốc</p>
                    </div>

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
                      VTV đánh giá Edupia là khóa học DUY NHẤT đồng hành giúp hơn 1 TRIỆU học sinh<br /> từ yếu kém lên khá,
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
    </div>
  </section>
</div>
@endsection
@push('scripts')
<script>
  function showVideo(idHtml) {
    $(`#${idHtml}`).
    html(`<iframe class="embed-responsive-16by9" width="816" height="460" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
  }

  function showVideoPost(idHtml) {
    $(`#${idHtml}`).
    html(`<iframe class="embed-responsive embed-responsive-16by9" width="526" height="341" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
  }

</script>
@endpush
