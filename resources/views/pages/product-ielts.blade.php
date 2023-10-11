@extends('layouts.main')
@section('og-title')
Product IELTS
@endsection
@section('content')
<div class="product-ielts">
  <section class="ielts-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="content-banner-ai">
            <p class="text-white text-font-size-50 text-font-weight-700 title-banner">
              Đồng hành cùng con đạt 6.0+ IELTS ngay từ THCS
            </p>
            <p class="text-white text-font-size-25 text-font-weight-400 des-banner">
              Chinh phục cơ hội tuyển thẳng vào các THCS và Đại học cùng giáo viên IELTS hàng đầu từ Hà
              Nội
              và thành phố Hồ Chí Minh.
            </p>
          </div>
        </div>
      </div>
  </section>
  <section class="ielts-register">
    <div class="container">
      <div class="edupia-container-lg bg-blue-910 div-register">
        <div class="row">
          <div class="col-lg-6 position-relative">
            <div class="img-register">
              <img class="img-fluid" src="{{ asset('images/imgs/product/img-register-ielts.png') }}"
                alt="img register" />
            </div>
          </div>
          <div class="col-lg-6 px-0">
            <div class="div-form-register">
              <form>
                <p class="text-center text-white text-font-size-30 text-font-weight-600 mb-0 title-register">Học thử miễn phí ngay hôm
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
                <div class="text-center div-button-form">
                  <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký ngay</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ielts-chance">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="title-chance">
              <p class="text-font-size-36 text-font-weight-600 text-center text-black">
                Cùng ba mẹ xóa tan mọi lo lắng của con về IELTS
              </p>
              <p class="text-center text-font-size-18 text-font-weight-400 text-black">
                IELTS là thước đo năng lực tiếng Anh toàn diện và phổ biến nhất với học sinh, <br />
                được công nhận bởi hơn 10.000 tổ chức, hơn 140 quốc gia.
              </p>
            </div>
          </div>
          <div class="col-lg-12 mt-5">
            <div class="row">
              <div class="col-lg-7">
                <div class="mt-5">
                  <p class="text-blue-300 text-font-size-30 text-font-weight-600 title-content-chance">
                    Cơ hội miễn thi tuyển thẳng THPT & Đại Học tương lai hội nhập rộng mở
                  </p>
                  <hr class="hr-chance" />
                  <div class="title-content-chance ">
                    <p class="text-blue-300 text-font-size-30 text-font-weight-600">
                      Nền tảng vững chắc phát triển tư duy toàn diện
                    </p>
                    <p class="text-font-size-18 text-font-weight-400 text-justify">
                      Các em sẽ được rèn luyện và phát triển kỹ năng tiếng Anh một cách toàn diện, không theo kiểu “học
                      lệch” thường thấy để phục vụ thi cử. Đồng thời IELTS giúp học sinh phát triển vượt bậc về khả năng
                      tư duy logic và trí tuệ.Trong quá trình học, các em sẽ được tiếp xúc với các chủ đề thông dụng
                      trong
                      cuộc sống hằng ngày. Điều này giúp các em không những giỏi về tiếng Anh, các em học sinh còn tự
                      tin,
                      mạnh dạn, chủ động và học giỏi những môn học khác.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="img-chance">
                  <img src="{{ asset('images/imgs/product/img-chance.png') }}" class="img-fluid" alt="img-chance" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ielts-teacher">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div>
              <p class="text-black text-center text-font-size-36 text-font-weight-600">Đội ngũ giáo viên chất lượng
                cao với điểm IELTS 8.0 trở lên</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="bg-green-100 item-teacher">
              <div class="row">
                <div class="col-lg-5">
                  <div class="pl-5 avt-teacher text-center">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/teacher-1.png') }}" alt="teacher" />
                    <div class="title-teacher">
                      <p class="mb-0 text-white text-font-size-30 text-font-weight-700 ">Thạc sĩ Thanh Hương</p>
                      <p class="mb-0 text-yellow-600 text-font-size-30 text-font-weight-700 ">8.0 IELTS Overall</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="list-item-result">
                    <ul>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Giảng viên khoa Sư phạm Tiếng Anh, trường Đại học
                        Ngoại Ngữ - Đại học Quốc gia Hà Nội
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Nhiều năm nghiên cứu, giảng dạy và phát triển các bài
                        giảng cho chứng chỉ quốc tế: IELTS, TOEIC, TOEFL...
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Học bổng toàn phần bậc học Tiến dĩ tại trường University
                        of Newcastle, Úc
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">

                        Thạc sĩ phương pháp giảng dạy tiếng Anh (Master of
                        TESOL), tại trường Victoria University, Melbourne, Úc
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="bg-green-100 item-teacher">
              <div class="row">
                <div class="col-lg-5">
                  <div class="pl-5 avt-teacher text-center">
                    <img class="img-fluid" src="{{ asset('images/imgs/product/teacher-2.png') }}" alt="teacher" />
                    <div class="title-teacher">
                      <p class="mb-0 text-white text-font-size-30 text-font-weight-700 ">Thạc sĩ Hồng Nhung</p>
                      <p class="mb-0 text-yellow-600 text-font-size-30 text-font-weight-700 ">8.0 IELTS Overall</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="list-item-result">
                    <ul>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Thạc sĩ Lý luận và Phương pháp giảng dạy Tiếng Anh,
                        trường Đại học Southern New Hampshire, Mỹ
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Tột nghiệp loại Giỏi, Khoa Ngôn Ngữ Anh, Đại học Hà Nội
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Giải Ba cuộc thi Giáo viên Giỏi cấp Cụm Hoàn Kiếm - HBT
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Nguyên Điều phối chuyên môn Tổ Tiếng Anh THPT Vinschool
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        8 năm giảng dạy Tiếng Anh tại trường THCS và THPT Vinschool
                      </li>
                      <li class="text-font-size-20 text-white text-font-weight-500">
                        Chuyên gia ôn luyện cho học sinh đạt giải cao trong nhiều
                        cuộc thi trong và ngoài nước
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
  <section class="ielts-procedure">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-4">
                <div>
                  <p class="m-0 text-white text-font-size-36 text-font-weight-900">PHƯƠNG PHÁP</p>
                  <p class="m-0 text-yellow-700 text-font-size-36 text-font-weight-900"> MŨI KHOAN - DRILL</p>
                  <p class="m-0 text-white text-font-size-36 text-font-weight-900">ĐỘC QUYỀN</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="pr-5 des-ielts-procedure">
                  <p class="text-white text-font-size-18 text-font-weight-400">Việc học Tiếng Anh cũng giống như việc
                    khoan sâu và phá vỡ một bức tường. Để tạo một mảnh vỡ trên
                    bức tường là rất dễ nhưng để phá vỡ nó bằng một mũi khoan thì rất khó và phải có chiến thuật.<br />
                    Giống như chúng ta cũng rất dễ dàng để biết một vài từ hay một vài câu Tiếng Anh nhưng để giỏi toàn
                    diện 4 kỹ năng và sử dụng tiếng Anh như ngôn ngữ thứ 2 thì không dễ dàng.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 content-procedure">
            <div class="row">
              <div class="col-lg-4">
                <div class="d-flex justify-content-center">
                  <div class="card border-0 item-procedure align-items-center" style="width: 100%;">
                    <img class="card-img" src="{{ asset('images/imgs/product/produce-1.svg') }}" alt="Card image cap">
                    <div class="card-body px-0 py-0 item-content-procedure">
                      <h5 class="text-center card-title text-white text-font-size-24 text-font-weight-700 mb-1">
                        LÊN KẾ HOẠCH
                      </h5>
                      <p class="text-center text-font-size-18 text-font-weight-400 text-white">
                        Xác định mục tiêu, đánh giá và lựa chọn mũi khoan phù hợp
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-flex justify-content-center">
                  <div class="card border-0 item-procedure align-items-center" style="width: 100%;">
                    <img class="card-img" src="{{ asset('images/imgs/product/produce-2.svg') }}" alt="Card image cap">
                    <div class="card-body px-0 py-0 item-content-procedure">
                      <h5 class="text-center card-title text-white text-font-size-24 text-font-weight-700 mb-1">
                        TIẾN HÀNH
                      </h5>
                      <p class="text-center text-font-size-18 text-font-weight-400 text-white">
                        Bắt đầu khoan sâu hơn<br /> từng chút một
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-flex justify-content-center">
                  <div class="card border-0 item-procedure align-items-center" style="width: 100%;">
                    <img class="card-img" src="{{ asset('images/imgs/product/produce-3.svg') }}" alt="Card image cap">
                    <div class="card-body px-0 py-0 item-content-procedure">
                      <h5 class="text-center card-title text-white text-font-size-24 text-font-weight-700 mb-1">
                        PHÁT TRIỂN
                      </h5>
                      <p class="text-center text-font-size-18 text-font-weight-400 text-white">
                        Phá vỡ kết cấu và mở rộng
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
  <section class="ielts-trip">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center btn-trip-register">
            <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký tư vấn</button>
          </div>
        </div>
        <div class="col-lg-12">
          <div>
            <p class="text-black text-center text-font-size-36 text-font-weight-600 title-trip">Lộ trình cá nhân hóa phù hợp
              với từng học sinh</p>
            <p class="text-black text-center text-font-size-18 text-font-weight-400">với mục tiêu giúp các em đạt
              6.0+ ngay từ cấp 2</p>
          </div>
        </div>
        <div class="col-lg-12 img-trip-content">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div>
                <img class="img-fluid" src="{{ asset('images/imgs/product/ielts-trip-2.png') }}" alt="img trip" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="position-relative content-trip">
                <img class="img-fluid" src="{{ asset('images/imgs/product/ielts-trip-1.png') }}" alt="img trip" />
                <p class="position-absolute text-white text-font-size-24 title-item-trip-1">
                  <span class="text-font-weight-700">Điểm chạm</span> - <span class="text-font-weight-500">Kick
                    start</span>
                </p>
                <p
                  class="position-absolute font-italic des-item-trip-1 text-white text-font-size-28 text-font-weight-700">
                  1.0 - 3.0 IELTS
                </p>
                <!-- item 2 -->
                <p class="position-absolute text-white text-font-size-24 title-item-trip-2">
                  <span class="text-font-weight-700">Tăng tốc</span> - <span class="text-font-weight-500">On the
                    move</span>
                </p>
                <p
                  class="position-absolute font-italic des-item-trip-2 text-white text-font-size-28 text-font-weight-700">
                  3.0 - 4.0 IELTS
                </p>
                <!-- item 3 -->
                <p class="position-absolute text-white text-font-size-24 title-item-trip-3">
                  <span class="text-font-weight-700">Cất cánh</span> - <span class="text-font-weight-500">Speed
                    up</span>
                </p>
                <p
                  class="position-absolute font-italic des-item-trip-3 text-white text-font-size-28 text-font-weight-700">
                  4.0 - 6.0 IELTS
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ielts-feedback1">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12 title-feedback1">
            <div>
              <p class="text-black text-font-size-36 text-font-weight-600 text-center">
                EDUPIA IELTS là nền móng vững chắc của<br />
                hơn 50.000 phụ huynh học sinh
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div>
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators mt-5 align-items-center">
                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback1.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Minh
                                Ngọc</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Phụ huynh em Minh Huyền</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">“ Mi Mi nhà mình năm nay lên
                                lớp 3, không muốn bắt con học quá nhiều nhưng mình biết
                                toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa học tập các
                                kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư duy và Edupia Math
                                hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là giáo viên Giỏi nên con được
                                tiếp cận với chất lượng giáo dục cao “</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback2.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Dung
                                (Mẹ Mi Mi)</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Nhân viên Kế Toán</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/list-star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">
                                “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng lên
                                lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký cho con học
                                ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự tiến bộ của con.
                                Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con yếu là các cô thông báo
                                luyện tập luôn nên giờ mẹ cũng yên tâm ”
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback2.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Dung
                                (Mẹ Mi Mi)</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Nhân viên Kế Toán</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">
                                “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng lên
                                lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký cho con học
                                ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự tiến bộ của con.
                                Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con yếu là các cô thông báo
                                luyện tập luôn nên giờ mẹ cũng yên tâm ”
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback1.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Minh
                                Ngọc</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Phụ huynh em Minh Huyền</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">“ Mi Mi nhà mình năm nay lên
                                lớp 3, không muốn bắt con học quá nhiều nhưng mình biết
                                toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa học tập các
                                kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư duy và Edupia Math
                                hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là giáo viên Giỏi nên con được
                                tiếp cận với chất lượng giáo dục cao “</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback1.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Minh
                                Ngọc</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Phụ huynh em Minh Huyền</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">“ Mi Mi nhà mình năm nay lên
                                lớp 3, không muốn bắt con học quá nhiều nhưng mình biết
                                toán là môn quan trọng vì vậy mình muốn tìm chương trình uy tín cho con vừa học tập các
                                kiến thức chuẩn chương trình trên lớp vừa rèn luyện được khả năng tư duy và Edupia Math
                                hoàn toàn đáp ứng được yêu cầu của mình. Các thầy cô đều là giáo viên Giỏi nên con được
                                tiếp cận với chất lượng giáo dục cao “</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="item-slider-feedback">
                          <div class="card border-0 align-items-center" style="width: 100%;">
                            <img class="card-img" src="{{ asset('images/imgs/product/ie-feedback2.png') }}"
                              alt="Card image cap">
                            <div class="card-body text-center">
                              <h5 class="mb-0 card-title text-blue-920 text-font-size-20 text-font-weight-600">Chị Dung
                                (Mẹ Mi Mi)</h5>
                              <p class="card-text text-font-size-16 text-font-weight-600">Nhân viên Kế Toán</p>
                              <div class="text-center list-star">
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                                <img src="{{ asset('images/icons/product/star.svg') }}" alt="icon star" />
                              </div>
                              <p class="text-black text-font-size-16 text-font-weight-400">
                                “ Nhà mình đi làm đều bận cả ngày thậm chí buổi tối càng bận, mà con năm nay cũng lên
                                lớp 5 rồi nếu không tập trung cho con thì con dễ mải chơi lắm. Mình đăng ký cho con học
                                ở Edupia Math vì có thể vừa làm ở nhà vừa kiểm soát được tiến độ và sự tiến bộ của con.
                                Các cô hàng tuần đều gửi đánh giá và nhắc nhở con, phần nào con yếu là các cô thông báo
                                luyện tập luôn nên giờ mẹ cũng yên tâm ”
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
  <section class="ielts-banner-mid">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-content-mid">
              <img class="img-fluid" src="{{ asset('images/imgs/product/ie-banner-mid.png') }}" alt="img banner mid" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content-banner-mid">
              <p class="text-white text-font-size-36 text-font-weight-600">Hỗ trợ sát sao, bố mẹ yên tâm đi công
                tác</p>
              <div class="list-item-result">
                <ul>
                  <li class="text-font-size-20 text-white text-font-weight-500">
                    Giáo viên kèm cặp trong suốt quá trình học
                  </li>
                  <li class="text-font-size-20 text-white text-font-weight-500">
                    Đội ngũ giáo vụ giải đáp thắc mắc 24/7
                  </li>
                  <li class="text-font-size-20 text-white text-font-weight-500">
                    Sĩ số 6-8 em 1 lớp để tăng độ tập trung và sát sao
                  </li>
                  <li class="text-font-size-20 text-white text-font-weight-500">
                    Báo cáo kết quả học tập cá nhân hóa theo tuần, tháng
                  </li>
                  <li class="text-font-size-20 text-white text-font-weight-500">
                    Tương tác trực tiếp qua phần mềm Classin
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ielts-achievements">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <p class="text-center text-black text-font-size-36 text-font-weight-600">
                Thành tích và chia sẻ của học sinh xuất sắc<br />
                tại EDUPIA IELTS
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <div>
              <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators mt-5 align-items-center">
                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-lg-3">
                        <div>
                          <img class="img-fluid" src="{{ asset('images/imgs/product/avt-student.png') }}"
                            alt="avt student" />
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div>
                          <div class="d-flex quote-content">
                            <div class="quote-icon">
                              <img class="img-fluid" width="35px" src="{{ asset('images/icons/product/quote-1.svg') }}"
                                alt="quote start" />
                            </div>
                            <div class="txt-quote">
                              <p class="text-font-size-16 text-center text-font-weight-400">
                                Trước đây mình từng cho bé học rất nhiều lớp tiếng Anh nhưng chưa tìm được chương trình
                                nào phù hợp. Tình cờ được một người đồng nghiệp giới thiệu Edupia, mình cảm thấy bé tiến
                                bộ và cải thiện điểm số rõ rệt. Cảm ơn Edupia rất nhiều!
                              </p>
                            </div>
                            <div class="quote-icon quote-end">
                              <img class="img-fluid" src="{{ asset('images/icons/product/quote-2.svg') }}"
                                alt="quote end" />
                            </div>
                          </div>
                          <div class="student-info">
                            <p class="text-center text-black text-font-size-24 text-font-weight-600">Đặng An Phương</p>
                            <p class="text-center font-italic text-font-size-16 text-font-weight-400">Lớp 10 - THPT
                              Nguyễn Siêu Hà Nội</p>
                            <p class="text-center text-yellow-500 text-font-size-24 text-font-weight-700">7.5 IELTS</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-3">
                        <div>
                          <img class="img-fluid" src="{{ asset('images/imgs/product/avt-student.png') }}"
                            alt="avt student" />
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div>
                          <div class="d-flex quote-content">
                            <div class="quote-icon">
                              <img class="img-fluid" width="35px" src="{{ asset('images/icons/product/quote-1.svg') }}"
                                alt="quote start" />
                            </div>
                            <div class="txt-quote">
                              <p class="text-font-size-16 text-center text-font-weight-400">
                                Trước đây mình từng cho bé học rất nhiều lớp tiếng Anh nhưng chưa tìm được chương trình
                                nào phù hợp. Tình cờ được một người đồng nghiệp giới thiệu Edupia, mình cảm thấy bé tiến
                                bộ và cải thiện điểm số rõ rệt. Cảm ơn Edupia rất nhiều!
                              </p>
                            </div>
                            <div class="quote-icon quote-end">
                              <img class="img-fluid" src="{{ asset('images/icons/product/quote-2.svg') }}"
                                alt="quote end" />
                            </div>
                          </div>
                          <div class="student-info">
                            <p class="text-center text-black text-font-size-24 text-font-weight-600">Đặng An Phương</p>
                            <p class="text-center font-italic text-font-size-16 text-font-weight-400">Lớp 10 - THPT
                              Nguyễn Siêu Hà Nội</p>
                            <p class="text-center text-yellow-500 text-font-size-24 text-font-weight-700">7.5 IELTS</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-3">
                        <div>
                          <img class="img-fluid" src="{{ asset('images/imgs/product/avt-student.png') }}"
                            alt="avt student" />
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div>
                          <div class="d-flex quote-content">
                            <div class="quote-icon">
                              <img class="img-fluid" width="35px" src="{{ asset('images/icons/product/quote-1.svg') }}"
                                alt="quote start" />
                            </div>
                            <div class="txt-quote">
                              <p class="text-font-size-16 text-center text-font-weight-400">
                                Trước đây mình từng cho bé học rất nhiều lớp tiếng Anh nhưng chưa tìm được chương trình
                                nào phù hợp. Tình cờ được một người đồng nghiệp giới thiệu Edupia, mình cảm thấy bé tiến
                                bộ và cải thiện điểm số rõ rệt. Cảm ơn Edupia rất nhiều!
                              </p>
                            </div>
                            <div class="quote-icon quote-end">
                              <img class="img-fluid" src="{{ asset('images/icons/product/quote-2.svg') }}"
                                alt="quote end" />
                            </div>
                          </div>
                          <div class="student-info">
                            <p class="text-center text-black text-font-size-24 text-font-weight-600">Đặng An Phương</p>
                            <p class="text-center font-italic text-font-size-16 text-font-weight-400">Lớp 10 - THPT
                              Nguyễn Siêu Hà Nội</p>
                            <p class="text-center text-yellow-500 text-font-size-24 text-font-weight-700">7.5 IELTS</p>
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
  <section class="ielts-award">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="col-lg-12">
          <div>
            <p class="text-black text-center text-font-size-36 text-font-weight-600">
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
                                class="card-title text-blue-920 text-font-size-20 text-center text-font-weight-700 mb-4">
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
                                class="card-title text-blue-920 text-font-size-20 text-center text-font-weight-700 mb-4">
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
                                class="card-title text-blue-920 text-font-size-20 text-center text-font-weight-700 mb-4">
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
  <section class="ielts-verify">
    <div class="container">
      <div class="edupia-container-lg">
        <div class="row">
          <div class="col-lg-12">
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
                    <div class="card-body px-0 py-0 des-video">
                      <p class="text-black text-center text-font-size-16 text-font-weight-400">
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
                    <div class="card-body px-0 py-0 des-video">
                      <p class="text-black text-center text-font-size-16 text-font-weight-400">
                        Edupia là chương trình Tiếng Anh ĐẦU TIÊN có
                        thầy cô giáo đồng hành theo sát tiến bộ của con 24/7
                      </p>
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
          <div class="col-lg-12 chicken-div-content">
            <div class="row">
              <div class="col-lg-7">
                <div class="content-chicken-txt">
                  <p class="text-left text-blue-920 text-font-size-45 text-font-weight-600 line-height-44 title-chicken">
                    Chỉ từ 175k/buổi
                  </p>
                  <p class="text-left text-green-100 text-font-size-36 text-font-weight-600 des-chicken">
                    Miễn phí kiểm tra đầu vào
                  </p>
                  <p
                    class="text-left text-font-size-20 text-font-weight-400 line-height-28 content-chicken-description pr-5">
                    Edupia Native mang lại sự hài lòng và an tâm tuyệt đối cho hàng ngàn phụ huynh.<br />
                    Chúng tôi cam kết hoàn 100% học phí nếu sau 3 tháng con không tiến bộ.
                  </p>
                  <div class="btn-chicken-verify">
                    <button class="btn btn-primary more-btn btn-resize">Đăng ký tư vấn</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 mt-2">
                <div class="text-left">
                  <img class="img-fluid" src="{{ asset('images/imgs/product/ie-banner-bottom.png') }}"
                    alt="img banner bottom" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ielts-register form-register-bottom">
    <div class="container">
      <div class="edupia-container-lg bg-blue-910 div-register">
        <div class="row">
          <div class="col-lg-6 position-relative">
            <div class="img-register">
              <img class="img-fluid" src="{{ asset('images/imgs/product/img-register-ielts.png') }}"
                alt="img register" />
            </div>
          </div>
          <div class="col-lg-6 px-0">
            <div class="div-form-register">
              <form>
                <p class="text-center text-white text-font-size-30 text-font-weight-600 mb-0 title-register">Học thử miễn phí ngay hôm
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
                <div class="text-center div-button-form">
                  <button type="submit" class="btn btn-primary more-btn btn-register">Đăng ký ngay</button>
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