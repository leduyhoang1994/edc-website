@extends('layouts.main')
@section('og-title')
Product AI
@endsection
@section('content')
<div class="product-ai">
  <section class="ai-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="content-banner-ai">
            <p class="text-white text-font-size-50 text-font-weight-700 title-banner">
              Đồng hành cùng con<br />
              chinh phục điểm 10 Tiếng Anh</p>
            <p class="text-white text-font-size-25 text-font-weight-400">Lộ trình học tiếng Anh trực tuyến xuyên
              suốt, bám sát SGK, <br />giúp con giỏi toàn diện 4 kỹ năng ngay từ lớp 1.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ai-form-register">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div class="about-register-content bg-blue-primary">
              <div class="row">
                <div class="col-lg-6">
                  <div class="text-center">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/img-register-ai.png') }}"
                      alt="img register" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="title-form-register">
                    <p class="text-center text-white text-font-size-26 text-font-weight-600 mb-0">
                      Đăng ký tư vấn
                    </p>
                    <p class="text-center text-white text-font-size-18 text-font-weight-400 mb-2">Ba mẹ hãy đăng ký để
                      được
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
  <section class="ai-roadmap">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600">
                EDUPIA AI: Lộ trình học tiếng Anh chất lượng cao, <br />
                xuyên suốt từ cấp 1 lên cấp 2
              </p>
              <p class="text-center text-black text-font-size-18 text-font-weight-400">EDUPIA AI là chương trình kết
                hợp của EDUPIA Tiểu học và EDUPIA THCS,<br />
                tạo nên lộ trình học tiếng Anh trực tuyến không ngắt quãng, giúp con giỏi toàn diện 4 kỹ
                năng ngay từ lớp 1.</p>
            </div>
          </div>
          <div class="col-lg-12 div-contentroadmap">
            <div class="row">
              <div class="col-lg-6">
                <div class="item-img-right">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/tieu-hoc-1.png') }}" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item-txt-right">
                  <p class="text-blue-primary text-font-size-30 text-font-weight-600">Nền tảng vững chắc với EDUPIA
                    Tiểu Học</p>
                  <hr width="30%" />
                  <p class="text-black text-font-size-18 text-font-weight-400">
                    Tạo cho con một thói quen, sở thích học tiếng Anh chủ động với nhiều trò chơi tương tác
                    dưới dạng video, hoạt hình, đối thoại.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="item-txt-left">
                  <p class="text-blue-primary text-font-size-30 text-font-weight-600">
                    Chắp cánh tương lai với EDUPIA THCS
                  </p>
                  <hr width="30%" />
                  <p class="text-black text-font-size-18 text-font-weight-400">
                    Cùng con vượt qua các kỳ thi tiếng Anh quan trọng với hệ thống
                    bài giảng chuyên sâu, bài tập và thư viện đề thi đa đạng.
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item-img-left">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/tieu-hoc-2.png') }}" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ai-ispeak">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-ispeak">
          <div class="position-relative">
            <img class="card-img" src="{{ asset('images/imgs/product/i-speak.png') }}" alt="Card image cap">
            <div class="video-verify">
              <iframe class="embed-responsive embed-responsive-16by9" width="100%" height="100%"
                src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1"
                title="YouTube video player" mute frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6 px-0">
          <div>
            <p class="text-white text-font-size-36 text-font-weight-600 mt-2">Con “lột xác” hoàn toàn môn tiếng Anh
              trong 3 tháng với EDUPIA AI
            </p>
            <div class="list-item-result">
              <ul>
                <li class="text-font-size-20 text-white text-font-weight-400">
                  <div class="d-flex align-items-center gap-8">
                    <i class="dot"></i>
                    <span>Công nghệ AI i-Speak nhận diện và sửa lỗi phát âm</span>
                  </div>
                </li>
                <li class="text-font-size-20 text-white text-font-weight-400">
                  <div class="d-flex align-items-center gap-8">
                    <i class="dot"></i>
                    <span>Chương trình bám sát SGK giúp con đạt điểm 10</span>
                  </div>
                </li>
                <li class="text-font-size-20 text-white text-font-weight-400">
                  <div class="d-flex align-items-center gap-8">
                    <i class="dot"></i>
                    <span>Giáo viên Anh-Mỹ với +5 năm kinh nghiệm giảng dạy</span>
                  </div>
                </li>
                <li class="text-font-size-20 text-white text-font-weight-400">
                  <div class="d-flex align-items-center gap-8">
                    <i class="dot"></i>
                    <span>Game tương tác thú vị, dễ nhớ dễ hiểu
                      Kho đề thi kèm lời giải chi tiết</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ai-study-online">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="col-lg-12">
          <div>
            <p class="text-center text-font-size-36 text-font-weight-600 title-study-online">Lo con học trực tuyến không hiệu
              quả?<br />
              Bố mẹ yên tâm vì đã có đội ngũ giáo vụ tận tình từ EDUPIA AI
            </p>
            <p class="text-center text-font-size-18 text-font-weight-400">Bố mẹ có thể theo sát tiến độ học của
              con qua Zalo,<br />
              được cập nhật hàng tuần bởi giáo viên chủ nhiệm các lớp</p>
          </div>
        </div>
        <div class="col-lg-12 video-study-online">
          <div>
            <div class="text-center position-relative" id="video_skill">
              <img class="img-fluid thumb-video-ai" srcset="{{ asset('images/imgs/product/ai-thumb-video.png') }}"
                alt="img video" />
              <div class="play-button-ai cursor-pointer" onClick="showVideo('video_skill')"></div>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-primary more-btn mt-4 btn-study-online">Đăng ký tư vấn</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ai-postshare">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600">
                Chia sẻ của phụ huynh, học sinh về EDUPIA
              </p>
            </div>
          </div>
          <div class="col-lg-12 mt-5">
            <div class="row">
              <div class="col-lg-4 px-3">
                <div class="item-post">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative" id="video1">
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-1.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video1')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-2.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video2')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-1.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video3')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-1.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video4')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-2.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video5')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
                      <img class="card-img" src="{{ asset('images/imgs/product/ai-post-1.png') }}"
                        alt="Card image cap">
                      <div class="play-button-post" onclick="showVideoPost('video6')"></div>
                    </div>
                    <div class="card-body pl-0 pr-0">
                      <h5 class="text-center card-title text-blue-primary text-font-size-18 text-font-weight-400 mb-0">
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
              <button class="btn btn-primary more-btn btn-study-online">Đăng ký tư vấn</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ai-verify">
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
              <div class="col-lg-6 pl-0">
                <div class="">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative item-verify">
                      <div class="position-relative">
                        <img class="card-img" src="{{ asset('images/imgs/product/i-speak.png') }}" alt="Card image cap">
                        <div class="video-verify">
                          <iframe class="embed-responsive embed-responsive-16by9" width="100%" height="100%"
                            src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1"
                            title="YouTube video player" mute frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                    <div class="card-body px-0 py-0 des-video-verify">
                      <div class="d-flex">
                        <img class="img-fluid" src="{{ asset('images/icons/product/vtv.svg') }}" alt="VTV">
                        <p class="text-black text-left text-font-size-16 text-font-weight-400">
                          Đánh giá Edupia là khoá học DUY NHẤT đồng hành giúp hơn 1 TRIỆU học sinh từ yếu kém lên
                          khá, giỏi Tiếng Anh
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 pr-0">
                <div class="">
                  <div class="card border-0" style="width: 100%;">
                    <div class="position-relative item-verify">
                      <div class="position-relative">
                        <img class="card-img" src="{{ asset('images/imgs/product/i-speak.png') }}" alt="Card image cap">
                        <div class="video-verify">
                          <iframe class="embed-responsive embed-responsive-16by9" width="100%" height="100%"
                            src="https://www.youtube.com/embed/rAwGaTomeEw?si=Aq0hmWQnigAlk-Pm?autoplay=1&mute=1"
                            title="YouTube video player" mute frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                    <div class="card-body px-0 py-0 des-video-verify">
                      <div class="d-flex">
                        <img class="img-fluid" src="{{ asset('images/icons/product/thvl.svg') }}" alt="THVL">
                        <p class="text-black text-left text-font-size-16 text-font-weight-400">
                          Edupia là chương trình Tiếng Anh ĐẦU TIÊN có
                          thầy cô giáo đồng hành theo sát tiến bộ của con 24/7
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
          <div class="col-lg-12 div-chicken">
            <div class="row">
              <div class="col-lg-7">
                <div class="content-chicken-txt">
                  <p class="text-left text-blue-primary text-font-size-45 text-font-weight-600 line-height-44 mb-2">
                    Chỉ từ 100k/tháng
                  </p>
                  <p class="text-left text-font-size-36 text-font-weight-600">Hoàn tiền 100% nếu không tiến bộ</p>
                  <p
                    class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description">
                    Edupia Native mang lại sự hài lòng và an tâm tuyệt đối cho hàng ngàn phụ huynh.
                  </p>
                  <p
                    class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description">
                    Chúng tôi cam kết hoàn 100% học phí nếu sau 3 tháng con không tiến bộ.
                  </p>
                  <div>
                    <button class="btn btn-primary more-btn mt-4">Đăng ký tư vấn</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 mt-2">
                <div class="text-left">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/img-graduated.png') }}"
                    alt="img-graduated.png" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 div-register-bottom">
            <div class="about-register-content bg-blue-primary">
              <div class="row">
                <div class="col-lg-6">
                  <div class="text-center">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/img-register-ai-2.png') }}"
                      alt="img register" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-4">
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
                        <input class="form-control input-customer" type="text" placeholder="Lớp của con" />
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary more-btn btn-register-bottom">Đăng ký ngay</button>
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