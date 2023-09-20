@extends('layouts.main')
@section('og-title')
Chi tiết tuyển dụng
@endsection
@section('content')
<main class="recruitment-detail">
  <section class="container edupia-mw-1230 text-left">
    <a class="back-link text-blue-primary">
      <img class="mr-1" src="{{ asset('images/icons/homepage/BackArrows.svg') }}" alt="back-arows" />
      Trở về
    </a>
  </section>
  <section class="container edupia-mw-1230 text-center header-title">
    <p class="m-0 text-font-size-20">Tuyển Dụng</p>
    <p class="m-0 text-font-size-30 text-uppercase">
      Content Social Marketing Senior
    </p>
    <div class="d-flex justify-content-center align-items-center desc-short">
      <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
      <span>Hà nội</span>
      <div class="label">
        <span>Phòng Marketing</span>
      </div>
    </div>
    <hr class="m-0" />
    <div class="d-flex w-70 justify-content-center align-items-center desc-list">
      <div class="px-3">
        <img width="6" src="{{ asset('images/icons/homepage/DotIcon.svg') }}" alt="dot-icon" />
        <span>Địa điểm: Hà Nội</span>
      </div>
      <div class="px-3">
        <img width="6" src="{{ asset('images/icons/homepage/DotIcon.svg') }}" alt="dot-icon" />
        <span>Bộ phận: Phòng Marketing</span>
      </div>
      <div class="px-3">
        <img width="6" src="{{ asset('images/icons/homepage/DotIcon.svg') }}" alt="dot-icon" />
        <span>Hạn nộp hồ sơ: 30/10/2023</span>
      </div>
      <div class="px-3">
        <img width="6" src="{{ asset('images/icons/homepage/DotIcon.svg') }}" alt="dot-icon" />
        <span>
          Hình thức làm việc: Toàn thời gian
        </span>
      </div>
    </div>
    <div class="text-center text-blue-primary text-font-size-20 text-font-weight-600 desc-salary">
      <p>Lên đến 25.000.000 VNĐ/tháng</p>
    </div>
    <hr class="m-0" />
  </section>
  <section class="desc-detail edupia-mw-1230 container">
    <div class="row mb-2">
      <div class="col-2">
        <p>Mô tả</p>
      </div>
      <div class="col-10">
        <p>
          - Lên kế hoạch nội dung phát triển kênh social ( Fanpage, tiktok , youtube) của công ty theo
          KPI cụ thể tháng, quý, năm.
        </p>
        <p>
          - Lên ý tưởng, sản xuất nội dung để tăng Brandtruth & Brandlove cho sản phẩm.
        </p>
        <p>
          - Tổ chức - triển khai các eventonline
        </p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-2">
        <p>Yêu cầu ứng viên</p>
      </div>
      <div class="col-10">
        <p>
          - Ưu tiên tốt nghiệp Báo chí, nhân văn, KTQD
        </p>
        <p>
          - Tối thiếu 1 năm kinh nghiệm trong lĩnh vực content social Marketing. Ưu tiên ứng viên có
          kinh nghiệm trong lĩnh vực giáo dục, mẹ và bé.
        </p>
        <p>
          - Thái độ: chủ động, chuyên nghiệp, trách nhiệm
        </p>
        <p>
          - Tư duy linh hoạt, sáng tạo, ham học hỏi, chủ động tìm kiếm thông tin.
        </p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-2">
        <p>Quyền lợi</p>
        <p>được hưởng</p>
      </div>
      <div class="col-10">
        <p>
          Các quyền lợi của công ty:
        </p>
        <p>
          - Lương 12-16 triệu/tháng (Lương cứng + Thưởng KPI)
        </p>
        <p>
          - Thử việc 100% lương, vé xe miễn phí
        </p>
        <p>
          - Xét tăng lương: 6 tháng/lần.
        </p>
        <p>
          - Lương tháng 13, Thưởng cuối năm theo kết quả kinh doanh.
        </p>
        <p>
          - Tham gia các hoạt động teambuilding, sinh nhật,...
        </p>
        <p>
          - Được hưởng đầy đủ chính sách nghỉ lễ, 12 ngày nghỉ phép/năm,... theo quy định của Nhà nước.
        </p>
        <p>
          Các quyền lợi khi trở thành thành viên của phòng Marketing:
        </p>
        <p>
          - Được làm việc trong môi trường có văn hoá đoàn kết,giúp đỡ lẫn nhau.
        </p>
        <p>
          - Được tranning kỹ càng, cụ thể trong công việc
        </p>
        <p>
          - Được thoải mái sáng tạo, đóng góp kiến, phát triển bản thân
        </p>
        <p>
          - Cơ hội thăng tiến lên leader
        </p>
        <div>
          <span>Chia sẻ job này:</span>
          <img class="ml-2" src="{{ asset('images/icons/homepage/SocialIcon.svg') }}" alt="social-icon" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Ứng tuyển ngay</p>
        <p>với Edupia</p>
      </div>
      <div class="col-10 recruitment-form">
        <form>
          <div class="form-group">
            <label for="hoTen">Họ và tên <span class="text-red text-font-size-600">*</span></label>
            <input type="text" class="form-control" id="hoTen" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="soDienThoai">Số Điện thoại <span class="text-red text-font-size-600">*</span></label>
              <input type="tel" class="form-control" id="soDienThoai" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
          </div>
          <div class="form-group">
            <label for="nguonTin">Bạn biết đến tin tuyển dụng này từ đâu? *</label>
            <textarea class="form-control" id="nguonTin" rows="1" required></textarea>
          </div>
          <div class="form-group">
            <label for="email">Upload CV của bạn (nếu có)</label>
            <label for="cv" class="custom-file-upload">
              <span> <span class="text-red">Tải lên </span>( doc, docx, pdf, cv, Max size &lt; 5MB)</span>
            </label>
            <input type="file" class="form-control-file d-none" id="cv">
          </div>
          <button type="submit" class="btn btn-block custom-button"><span class="text-font-weight-700 text-font-size-20 text-white">GỬI ĐI</span></button>
        </form>
      </div>
    </div>
  </section>
  <hr class="m-0" />
  <section class="contact edupia-mw-1230 container">
    <div class="text-center">
      <p>Số điện thoại liên hệ tuyển dụng:</p>
      <div class="d-flex justify-content-center align-items-center">
        <img class="mr-1" width="23" src="{{ asset('images/icons/homepage/PhoneIcon.svg') }}" alt="PhoneIcon" />
        <span class="text-blue-500 text-font-size-30 text-font-weight-700">024 6295 4629</span>
      </div>
      <p>Thời giờ làm việc:</p>
      <p>- Sáng: 8h00 - 12h00</p>
      <p>- Chiều: 13h30 - 17h30</p>
      <p>- Nghỉ: Chủ nhật và các ngày Lễ, Tết</p>
    </div>
  </section>
  <hr class="m-0" />
  <section class="other-position edupia-mw-1230 container">
    <p class="text-center text-font-size-30 text-font-weight-600 m-0">Xem Thêm Các Vị Trí Khác</p>
    <div class="position-list-job">
      {{-- job --}}
      <div class="position-item row">
        <div class="col-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>
  
        </div>
        <div class="col-4 d-flex align-items-center text-font-weight-400 text-font-size-18" >
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>
  
        </div>
        <div class="col-4 d-flex align-items-center text-font-weight-400 text-font-size-18" >
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>
  
        </div>
        <div class="col-4 d-flex align-items-center text-font-weight-400 text-font-size-18" >
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>
  
        </div>
        <div class="col-4 d-flex align-items-center text-font-weight-400 text-font-size-18" >
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>

      {{-- job --}}
      <div class="position-item row">
        <div class="col-6">
          <p class="mb-2 text-font-weight-600 text-font-size-18 text-uppercase">Content Social Marketing Senior</p>
          <div class="d-flex align-items-center text-font-weight-400 text-font-size-16">
            <img width="24" class="mr-1" src="{{ asset('images/icons/homepage/LocationIcon.svg') }}" alt="location-icon" />
            <span>Hà nội</span>
            <div class="label">
              <span class="text-blue-primary">Phòng Marketing</span>
            </div>
          </div>
  
        </div>
        <div class="col-4 d-flex align-items-center text-font-weight-400 text-font-size-18" >
          <p class="m-0">Lên đến 25.000.000 VNĐ/tháng</p>
        </div>
        <div class="col-2 d-flex align-items-center text-font-weight-400 text-font-size-18 text-blue-primary">
          <div class="recruitment-btn">
            <span>Ứng tuyển</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
