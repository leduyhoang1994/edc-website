@extends('layouts.main')
@section('og-title')
Bài viết chi tiết
@endsection
@section('content')
<main class="news-detail">
  <section class="container edupia-mw-1230">
    <div class="row">
      <div class="col-sm-8 left-block">
        <div class="text-font-size-15 text-font-weight-400">
          <a class="text-black-200" href="">Trang chủ </a>
          <span>\</span>
          <a class="text-black-200" href=""> Tin tức </a>
          <span>\</span>
          <a class="text-black-200" href="">MobiFone và Educa hợp tác chiến lược nâng tầm nền giáo dục số Việt Nam</a>
        </div>
        <p class="title m-0 text-font-weight-500 text-font-size-26">MobiFone và Educa hợp tác chiến lược nâng tầm nền giáo dục số Việt Nam</p>
        <div class="social-list d-flex flex-sm-row flex-column justify-content-between text-font-size-16 text-font-weight-300">
          <div class="d-flex align-items-center text-font-weight-400 mb-1">
            <img class="mr-1" width="13" height="14" src="{{ asset('images/icons/other/FolderIcon.svg') }}" alt="FolderIcon" />
            <span>Tin Tức</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <img class="mr-1" width="13" height="14" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
            <span>Aladin</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <img class="mr-1" width="13" height="14" src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
            <span>Thứ 3, 13-05-2023</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <img class="mr-1" width="13" height="14" src="{{ asset('images/icons/other/EyeIcon.svg') }}" alt="EyeIcon" />
            <span>5678</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <span>Share to</span>
            <img class="ml-2" width="96px" src="{{ asset('images/icons/homepage/SocialIcon.svg') }}" alt="social-icon" />
          </div>
        </div>
        <hr class="line bg-black" />
        <div class="text-font-size-18">
          <p class="my-2 text-font-weigh-500"><i>(VTC News) - MobiFone và Công ty Cổ phần giáo dục Educa Corporation ký kết bản hợp tác chiến lược giữa 2 doanh nghiệp, mang tiếng Anh chất lượng quốc tế đến học sinh Việt Nam.</i></p>
        </div>
        <div class="text-font-size-18 text-font-weight-400">
          <p class="mb-2">
            Ngày 9/8/2023 vừa qua diễn ra lễ ký kết hợp tác chiến lược giữa Tổng Công ty MobiFone và Công ty Cổ phần giáo dục Educa Corporation. Đây là cơ hội để MobiFone và Educa chia sẻ những điểm chung về tầm nhìn, sứ mệnh của mình trên con đường bồi dưỡng thế hệ trẻ của Việt Nam trở thành các công dân số toàn cầu, với trọng tâm là nâng cao kỹ năng sử dụng tiếng Anh để tiếp cận tới các nền tri thức tiên tiến trên thế giới.
          </p>
          <img class="w-100 mb-2" src="{{ asset('images/imgs/other/news-content-1.png') }}" alt="news-content-1" />
          <p class="mb-2">
            Hai bên nhất trí hợp tác sâu rộng trong việc triển khai các nội dung giáo dục chuẩn quốc tế của Educa kết hợp cùng công nghệ giáo dục hiện đại của mobiEdu để tạo nên một hệ sinh thái tiếng Anh dành cho mọi lứa tuổi, từ trẻ em tới người đi làm, dự kiến sẽ trở thành siêu ứng dụng lớn tại Việt Nam, Make in Vietnam, dành cho người Việt Nam.
          </p>
          <p>
            Tại lễ ký kết, MobiFone và Educa đồng ý hợp tác trong việc sử dụng các giải pháp, sản phẩm của nhau để tối ưu giá trị cho người dùng hiện hữu của mỗi doanh nghiệp, cũng như cho chính cán bộ công nhân viên nội bộ.
          </p>
          <p class="mb-2">
            Với thế mạnh là một trong những đơn vị công nghệ thông tin hàng đầu tại Việt Nam, MobiFone sẽ hỗ trợ phía Educa nền tảng mobiEdu mSchool trong các chương trình giáo dục trực tuyến của Educa, các chương trình gia sư, hướng dẫn online. Phía MobiFone sẽ sử dụng các nội dung đào tạo của Educa, như Edupia, Babilala, chương trình luyện thi, chương trình đào tạo tiếng Anh cho người đi làm để trở thành các nội dung đào tạo nội bộ hiệu quả.
          </p>
          <img class="w-100 mb-2" src="{{ asset('images/imgs/other/news-content-2.png') }}" alt="news-content-2" />
          <p class="mb-2">
            Tiến tới xa hơn với các dự án giáo dục trực tuyến cộng đồng, các dự án dạy học kết hợp Online-To-Offline, MobiFone và Educa kỳ vọng sự hợp tác này sẽ đóng góp không nhỏ vào công cuộc số của nền giáo dục Việt Nam. Đây sẽ là sự hợp tác chiến lược, dài hạn, đánh dấu bước ngoặt cho sự phát triển của 2 doanh nghiệp.
          </p>
          <p class="mb-2">
            Phát biểu trong buổi lễ ký kết, đại diện phía MobiFone, ông Lê Quang Minh cho biết: “Với sứ mệnh đưa các chương trình học chất lượng, bổ ích đến với quảng đại người dân Việt Nam thông qua hệ sinh thái giáo dục số mobiEdu, MobiFone rất vinh dự khi được hợp tác với các đối tác lớn trong lĩnh vực Edtech như Công ty Cổ phần giáo dục Educa Corporation. Mong rằng thời gian tới chúng ta sẽ có các bước tiến dài về sản phẩm, kinh doanh để mang lại lợi ích cho người dùng”.
          </p>
          <p class="mb-2">
            Ông Trần Đức Hùng - Tổng giám đốc Educa Corporation cũng chia sẻ phía Educa rất vinh dự khi trở thành đối tác của MobiFone, sự kiện mở ra cơ hội hợp tác sâu rộng để mang lại các dịch vụ nội dung số trong lĩnh vực giáo dục đến với hơn 30 triệu khách hàng của nhà mạng MobiFone.
          </p>
          <p class="mb-2">
            Ngay sau buổi ký kết hợp tác chiến lược, Tổng Công ty Viễn thông MobiFone và Công ty Cổ phần giáo dục Educa Corporation sẽ cùng tiến hành các bước tiếp theo của quá trình phát triển sản phẩm hệ thống và thị trường phân phối. Dự kiến vào đầu tháng 9, các sản phẩm hợp tác của hai bên sẽ chính thức được ra mắt người dùng trên nền tảng giáo dục trực tuyến mobiEdu của MobiFone.
          </p>
        </div>
      </div>
      <div class="col-sm-4 right-block">
        <div class="featured-article">
          <span class="text-font-size-26 text-font-weight-600 text-white">Bài viết nổi bật</span>
        </div>
        <div class="row mb-4 text-font-size-18 text-font-weight-500">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-detail-pic-1.png') }}" alt="news-detail-pic-1" />
          </div>
          <div class="col-sm right-item">
            <p>
              Edupia nhận giải thương hiệu giáo dục toàn cầu
            </p>
          </div>
        </div>
        <div class="row mb-4 text-font-size-18 text-font-weight-500">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-detail-pic-2.png') }}" alt="news-detail-pic-2" />
          </div>
          <div class="col-sm right-item">
            <p>
              Edupia nhận giải thương hiệu giáo dục toàn cầu
            </p>
          </div>
        </div>
        <div class="row mb-4 text-font-size-18 text-font-weight-500">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-detail-pic-3.png') }}" alt="news-detail-pic-3" />
          </div>
          <div class="col-sm right-item">
            <p>
              Edupia nhận giải thương hiệu giáo dục toàn cầu
            </p>
          </div>
        </div>
        <div class="row mb-4 text-font-size-18 text-font-weight-500">
          <div class="col-sm">
            <img class="w-100" src="{{ asset('images/imgs/other/news-detail-pic-4.png') }}" alt="news-detail-pic-4" />
          </div>
          <div class="col-sm right-item">
            <p>
              Edupia nhận giải thương hiệu giáo dục toàn cầu
            </p>
          </div>
        </div>
        <div class="row mb-4 text-font-size-18 text-font-weight-500">
          <div class="col-sm right-item">
            <img class="w-100" src="{{ asset('images/imgs/other/news-detail-pic-5.png') }}" alt="news-detail-pic-5" />
          </div>
          <div class="col-sm">
            <p>
              Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu
            </p>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-sm">
            <div class="banner-right">
              <div class="text-font-size-26 text-font-weigh-600 text-white text-center mb-3">
                <p>Đặc biệt! Tặng 100 ba mẹ</p>
                <p>đăng ký đầu tiên</p>
                <p>bộ quà trị giá 2 triệu</p>
              </div>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control form-rounded" placeholder="Họ tên phụ huynh">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-rounded" placeholder="Số điện thoại">
                </div>
                <div class="form-group position-relative">
                  <select class="select-cus form-select rounded-pill w-100 text-font-size-18 text-font-weight-300" aria-label="Select Example">
                    <option selected>Bé học lớp mấy?</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                  </select>
                  <span class="custom-icon">
                    <img src="{{ asset('images/icons/other/DownIcon.svg') }}" alt="DownIcon" />
                  </span>
                </div>
                <button type="submit" class="btn btn-block custom-button mx-auto">
                  <span class="text-font-weight-600 text-font-size-18 text-white">Đăng ký ngay</span>
                </button>
              </form>
              <img class="w-100" src="{{ asset('images/imgs/other/news-banner-right.png') }}" alt="FacebookIcon" />
            </div>
          </div>
      
        </div>
      </div>
    </div>
  </section>
  <section class="container edupia-mw-1230">
    <div class="news-list page">
      <p class="title text-font-weight-600 text-font-size-30 text-center m-0">Bài viết liên quan</p>
      <div class="row">
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 news-item">
          <div>
            <img width="100%" src="{{ asset('images/imgs/other/other-news-1.png') }}" alt="other-news-1" />
          </div>
          <div class="short-content">
            <p class="text-font-size-18 text-font-weight-500 mt-3">Edupia nhận giải thưởng thương hiệu giáo dục toàn cầu</p>
            <div class="author d-flex text-font-size-16 text-font-weight-300 mb-2">
              <div class="d-flex align-items-center mr-3">
                <img width="13" height="14" class="mr-1" src="{{ asset('images/icons/other/UserIcon.svg') }}" alt="UserIcon" />
                <span>Aladin</span>
              </div>
              <div class="d-flex align-items-center">
                <img src="{{ asset('images/icons/other/ClockIcon.svg') }}" alt="ClockIcon" />
                <span>Thứ 3, 13-05-2023</span>
              </div>
            </div>
            <div class="text-font-size-16 text-font-weight-300">
              <p class="m-0">
                Ở hạng mục Giáo dục, Edupia nhận giải thưởng Best Online English Teaching Product (Sản phẩm đào tạo tiếng Anh trực tuyến tốt nhất). Ngoài ra, đại diện Việt Nam....
              </p>
            </div>
            <div class="see-detail-btn">
              <span class="text-font-size-16 text-font-weight-400 text-white">Xem chi tiết</span>
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
