@extends('layouts.main')
@section('og-title')
Product Native
@endsection
@section('content')
<div class="product-native">
  <section class="native-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div>
            <h1 class="text-black text-font-size-36 text-font-weight-400 text-uppercase">Edupia Native</h1>
            <p class="line-height-50 text-black text-font-size-45 text-font-weight-600">Chinh phục tiếng Anh cùng gia
              sư
              bản xứ 100%</p>
            <p class="text-black text-font-size-20 text-font-weight-500">Con tự tin giao tiếp tiếng Anh, đạt điểm
              10
              tiếng Anh với chương trình gia sư bản xứ 1-1.</p>
            <button class="btn btn-primary more-btn mt-4">Đăng ký tư vấn</button>
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <img class="img-fluid" src="{{ asset('images/imgs/product/banner.png') }}" alt="banner" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="native-register">
    <div class="container">
      <div class="edupia-container-lg bg-blue-700 div-register">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-register">
              <img class="img-fluid" src="{{ asset('images/imgs/product/img-register.png') }}" alt="img register" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="div-form-register">
              <form>
                <p class="text-center text-white text-font-size-30 text-font-weight-600 mb-0">Học thử miễn phí ngay hôm
                  nay</p>
                <p class="text-center text-white text-font-size-18 text-font-weight-400">Để lại thông tin để ban giáo vụ
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
                  <select class="form-select w-100 input-customer">
                    <option selected disabled>Năm sinh của con</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                  </select>
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
  <section class="native-skill">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="title-skill">
          <p class="text-center text-font-size-36 text-font-weight-600 line-height-44">Phát triển toàn diện 4 kỹ
            năng<br /> Nghe - Nói - Đọc - Viết </p>
          <p class="text-center text-font-size-18 text-font-weight-400">EDUPIA NATIVE là chương trình học tiếng Anh
            với thầy cô bản xứ chất lượng cao,<br />
            giúp con phát triển kỹ năng tiếng Anh toàn diện, tự tin giao tiếp trong môi trường quốc tế</p>
        </div>
        <div class="text-center position-relative" id="video_skill">
          <img class="img-fluid" srcset="{{ asset('images/imgs/product/img-video.png') }}" alt="img video" />
          <div class="play-button cursor-pointer" onClick="showVideo()"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="native-result">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-6">
            <div>
              <p class="text-font-size-36 text-font-weight-600 line-height-44">98% học sinh đạt điểm 9+ trong các
                kỳ thi quan trọng</p>
              <div class="list-item-result">
                <ul>
                  <li class="text-font-size-18">
                    Giáo viên bản xứ kèm cặp trong suốt quá trình học
                  </li>
                  <li class="text-font-size-18">
                    Tự tin giao tiếp tiếng Anh trong 3 tháng
                  </li>
                  <li class="text-font-size-18">
                    Cam kết đầu ra chuẩn Cambridge
                  </li>
                  <li class="text-font-size-18">
                    Học vui vẻ, thoát khỏi nỗi sợ tiếng Anh
                  </li>
                </ul>
              </div>
              <button class="btn btn-primary more-btn mt-4 btn-register">Đăng ký tư vấn</button>
            </div>
          </div>
          <div class="col-lg-6">
            <div>
              <img class="img-fluid" src="{{ asset('images/imgs/product/img-result.png') }}" alt="img result" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="native-commit">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="title-commit">
          <p class="text-center text-black text-font-size-36 text-font-weight-600 line-height-44">EDUPIA NATIVE cam kết
            đảm bảo đầu ra cho học sinh sau 3-6 tháng</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="content-commit">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/product/img-commit-1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="text-center card-title text-black text-font-size-24 text-font-weight-600 mb-0">
                    Lớp 1 - Lớp 2
                  </h5>
                  <div class="list-item-result item-card-commit">
                    <ul>
                      <li class="text-font-size-20">
                        Biết nói và nhớ các từ, cấu trúc của bài học
                      </li>
                      <li class="text-font-size-20">
                        Nghe hiểu các chỉ dẫn cơ bản
                      </li>
                      <li class="text-font-size-20">
                        Làm quen với dạng bài thi Cambridge Starters
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content-commit float-right">
              <div class="card border-0" style="width: 100%;">
                <img class="card-img" src="{{ asset('images/imgs/product/img-commit-2.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="text-center card-title text-black text-font-size-24 text-font-weight-600 mb-0">
                    Lớp 3- Lớp 4 - Lớp 5
                  </h5>
                  <div class="list-item-result item-card-commit">
                    <ul>
                      <li class="text-font-size-20">
                        Khả năng vận dụng tiếng Anh ở trình độ cao
                      </li>
                      <li class="text-font-size-20">
                        Chủ động sử dụng tiếng Anh theo tình huống
                      </li>
                      <li class="text-font-size-20">
                        Đạt chuẩn đầu ra 4 kỹ năng của bộ GD&ĐT
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-5 text-center">
          <button class="btn btn-primary more-btn mt-4 btn-register">Đăng ký tư vấn</button>
        </div>
      </div>
    </div>
  </section>
  <section class="native-teams">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-native-teams">
              <p class="text-center text-font-size-36 text-font-weight-600 line-height-44">Đội ngữ giáo viên giàu
                kinh nghiệm đồng hành cùng con</p>
            </div>
          </div>
          <div class="col-lg-12">
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
                          <div class="d-flex justify-content-center w-100 bg-blue-700 img-card-slide">
                            <img class="card-img img-fluid" src="{{ asset('images/imgs/product/avt-adam.png') }}"
                              alt="Card image cap">
                          </div>
                          <div class="card-body pl-0 pr-0">
                            <h5
                              class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                              <span class="text-font-weight-400">Thầy</span> Thầy Adam Lewis
                            </h5>
                            <p class="text-black text-center text-font-size-18 text-font-weight-400">Giám đốc phát triển
                              nội dung</p>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc
                                Trung tâm VAS,
                                Giám đốc khối Digital của Viettel Telecom.</span>
                            </div>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh
                                nghiệm trong
                                lĩnh vực viễn thông và nội dung số.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card border-0" style="width: 100%;">
                          <div class="d-flex justify-content-center w-100 bg-blue-700 img-card-slide">
                            <img class="card-img img-fluid" src="{{ asset('images/imgs/product/avt-miller.png') }}"
                              alt="Card image cap">
                          </div>
                          <div class="card-body pl-0 pr-0">
                            <h5
                              class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                              <span class="text-font-weight-400">Cô</span> Jessica Miller
                            </h5>
                            <p class="text-black text-center text-font-size-18 text-font-weight-400">Cố vấn sư phạm</p>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc
                                Trung tâm VAS,
                                Giám đốc khối Digital của Viettel Telecom.</span>
                            </div>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh
                                nghiệm trong
                                lĩnh vực viễn thông và nội dung số.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card border-0" style="width: 100%;">
                          <div class="d-flex justify-content-center w-100 bg-blue-700 img-card-slide">
                            <img class="card-img img-fluid" src="{{ asset('images/imgs/product/avt-hare.png') }}"
                              alt="Card image cap">
                          </div>
                          <div class="card-body pl-0 pr-0">
                            <h5
                              class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                              <span class="text-font-weight-400">Cô</span> Suzanna Hare
                            </h5>
                            <p class="text-black text-center text-font-size-18 text-font-weight-400">Cô vấn sư phạm</p>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc
                                Trung tâm VAS,
                                Giám đốc khối Digital của Viettel Telecom.</span>
                            </div>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh
                                nghiệm trong
                                lĩnh vực viễn thông và nội dung số.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card border-0" style="width: 100%;">
                          <div class="d-flex justify-content-center w-100 bg-blue-700 img-card-slide-cayman">
                            <img class="card-img img-fluid" src="{{ asset('images/imgs/product/avt-cayman.png') }}"
                              alt="Card image cap">
                          </div>
                          <div class="card-body pl-0 pr-0">
                            <h5
                              class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                              <span class="text-font-weight-400">Thầy</span> Cayman Fitzhugh
                            </h5>
                            <p class="text-black text-center text-font-size-18 text-font-weight-400">Cô vấn sư phạm</p>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Từng là Giám đốc
                                Trung tâm VAS,
                                Giám đốc khối Digital của Viettel Telecom.</span>
                            </div>
                            <div class="card-text mt-4 d-flex text-left">
                              <div>
                                <i class="dot"></i>
                              </div>
                              <span class="ml-1 text-font-size-16 text-font-weight-400 text-black">Có hơn 10 năm kinh
                                nghiệm trong
                                lĩnh vực viễn thông và nội dung số.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="native-postshare">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600">Chia sẻ của phụ huynh, học
                sinh về
                Edupia Native</p>
            </div>
          </div>
          <div class="col-lg-12 my-5">
            <div class="row">
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video1">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video1')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        EDUPIA có kho đề thi phong phú nên con luyện đề trên EDUPIA mỗi tuần cùng với các cô
                        giáo vụ để có thể chuẩn bị tốt cho kỳ thi vào 10
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video2">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native-2.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video2')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        “Nhờ có EDUPIA, con đã tự tin hơn giao tiếp tiếng Anh và thực sự thích môn tiếng Anh.
                        Con rất thích tham gia lớp học trực tuyến với người bản xứ mỗi tuần để luyện
                        nói.”
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video3">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native-3.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video3')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        EDUPIA có kho đề thi phong phú nên con luyện đề trên EDUPIA mỗi tuần cùng với các cô
                        giáo vụ để có thể chuẩn bị tốt cho kỳ thi vào 10
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video4">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video4')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        EDUPIA có kho đề thi phong phú nên con luyện đề trên EDUPIA mỗi tuần cùng với các cô
                        giáo vụ để có thể chuẩn bị tốt cho kỳ thi vào 10
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video5">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native-2.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video5')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        “Nhờ có EDUPIA, con đã tự tin hơn giao tiếp tiếng Anh và thực sự thích môn tiếng Anh.
                        Con rất thích tham gia lớp học trực tuyến với người bản xứ mỗi tuần để luyện
                        nói.”
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video6">
                      <img class="card-img" src="{{ asset('images/imgs/product/img-post-native-3.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video6')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-20 text-font-weight-600 mb-0">
                        Em Thái Phương Vy (Lớp 7)
                      </h5>
                      <div class="text-center my-1">
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                        <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                      </div>
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        EDUPIA có kho đề thi phong phú nên con luyện đề trên EDUPIA mỗi tuần cùng với các cô
                        giáo vụ để có thể chuẩn bị tốt cho kỳ thi vào 10
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="text-center">
              <button class="btn btn-primary more-btn mt-4 btn-register">Đăng ký tư vấn</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="native-verify">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="title-verify">
              <p class="text-black text-center text-font-size-36 text-font-weight-600">Được kiểm chứng bởi truyền
                thông, báo chí toàn quốc</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="item-verify">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative">
                      <div class="position-relative" id="videoVerify1">
                        <img class="card-img" src="{{ asset('images/imgs/product/tivi-1.png') }}"
                          alt="Card image cap">
                        <div class="play-button-post" onclick="showVideoVerify('videoVerify1')"></div>
                      </div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        VTV Đánh giá Edupia là khoá học DUY NHẤT đồng hành giúp hơn 1 TRIỆU học sinh từ yếu kém lên khá,
                        giỏi Tiếng Anh
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item-verify">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative">
                      <div class="position-relative" id="videoVerify2">
                        <img class="card-img" src="{{ asset('images/imgs/product/tivi-2.png') }}"
                          alt="Card image cap">
                        <div class="play-button-post" onclick="showVideoVerify('videoVerify2')"></div>
                      </div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <p class="text-black text-center text-font-size-18 text-font-weight-400">
                        Edupia là chương trình Tiếng Anh ĐẦU TIÊN có
                        thầy cô giáo đồng hành theo sát tiến bộ của con 24/7
                      </p>
                    </div>
                  </div>
                </div>
              </div>
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
          <div class="col-lg-12 mt-5 py-5">
            <div class="row">
              <div class="col-lg-7">
                <div class="content-chicken-txt">
                  <p class="text-left text-blue-primary text-font-size-45 text-font-weight-600 line-height-44 mb-2">Chỉ
                    từ 490k/tháng</p>
                  <p class="text-left text-font-size-36 text-font-weight-600">Hoàn tiền 100% nếu không tiến bộ</p>
                  <p
                    class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description">
                    Edupia Native mang lại sự hài lòng và an tâm tuyệt đối cho hàng ngàn phụ huynh. Chúng
                    tôi cam kết hoàn 100% học phí nếu sau 3 tháng con không tiến bộ.
                  </p>
                  <div>
                    <button class="btn btn-primary more-btn mt-4">Đăng ký ngay</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="text-left">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/img-chicken.png') }}" alt="img chicken" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-5">
            <div class="about-register-content bg-blue-700">
              <div class="row">
                <div class="col-lg-6">
                  <div class="text-center">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/img-form-register.png') }}"
                      alt="img register" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <p class="text-center text-white text-font-size-26 text-font-weight-600 mb-1">
                      Đăng ký tư vấn
                    </p>
                    <p class="text-center text-white text-font-size-18 text-font-weight-400">Ba mẹ hãy đăng ký để được
                      các thầy cô tại EDUPIA
                      tư vấn về lộ trình học cho con nhé!
                    </p>
                    <form>
                      <div class="form-group">
                        <input class="form-control input-customer" type="text" placeholder="Họ tên phụ huynh" />
                      </div>
                      <div class="form-group">
                        <input class="form-control input-customer" type="number" placeholder="Số điện thoại" />
                      </div>
                      <div class="form-group">
                        <input class="form-control input-customer" type="number" placeholder="Bé học lớp mấy?" />
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
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('scripts')
<script>
  function showVideo() {
    $('#video_skill').
      html(`<iframe class="embed-responsive embed-responsive-16by9" width="1020" height="533" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
      )
  }

  function showVideoPost(idHtml) {
    $(`#${idHtml}`).
      html(`<iframe class="embed-responsive embed-responsive-16by9" width="370" height="227" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
      )
  }

  function showVideoVerify(idHtml) {
    $(`#${idHtml}`).
      html(`<iframe class="embed-responsive embed-responsive-16by9" width="492" height="349" src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1" title="YouTube video player" mute frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`
      )
  }
</script>
@endpush