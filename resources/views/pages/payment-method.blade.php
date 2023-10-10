@extends('layouts.main')
@section('og-title')
Thanh toán
@endsection
@section('content')
<main class="payment-method text-center">
  <section class="mx-auto payment-title container edupia-mw-1230">
    <p class="m-0 text-font-size-40">Hình Thức Thanh Toán</p>
  </section>
  <section class="container edupia-mw-1230 text-left cod-method">
    <div class="row">
      <div class="col">
        <span class="tex-left text-font-weight-400 text-font-size-18 cod-head">Để tiến hành thanh toán, Phụ huynh vui lòng chọn gói học muốn mua và chọn một trong các hình thức thanh toán sau:</span>
        <p class="text-font-size-24 text-blue-300 cod-title">1. Thanh toán khi nhận hàng (COD)</p>
        <ul class="text-font-size-18 text-font-weight-400 pl-3">
          <li>
            <p>
              Phương thức thu tiền tận nơi áp dụng đối với mọi khách hàng thông qua các đối tác vận
              chuyển. Khách hàng có thể đặt hàng qua website Edupia.vn hoặc qua tổng đài điện thoại
              093.120.8686. Nhân viên của chúng tôi sẽ gọi điện xác nhận với khách hàng về sản phẩm và
              phương thức vận chuyển.
            </p>
          </li>
          <li>
            <p>
              Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho nhân viên giao nhận
              ngay sau khi hoàn tất kiểm tra hàng hóa và nhận phiếu giao hàng
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="row banking-block">
      <div class="col">
        <p class="text-font-size-24 text-blue-300 banking-title mb-3">2. Chuyển khoản qua tài khoản ngân hàng</p>
        <p class="text-font-size-18 text-font-weight-400 mb-4">Vui lòng chuyển khoản theo thông tin dưới đây:</p>
      </div>
    </div>
  </section>
  <section class="banking-info container-fluid py-2">
    <div class="container edupia-mw-1230 text-left">
      <div class="row">
        <div class="col-sm-2 qr-block">
          <img class="w-100" src="{{ asset('images/icons/homepage/VnpayQR.png') }}" alt="qr-info" />
          <div class="mt-1 text-font-size-16 text-font-weight-500 text-gray-300 description text-center">
            <span>Quét mã QR hoặc</span>
            <span>hoặc chuyển khoản theo</span>
            <span>số tài khoản</span>
          </div>
        </div>
        <div class="col-sm-10 info-block">
          <p>Ngân hàng: <b>Quân đội MB - Chi nhánh Hoàn Kiếm</b></p>
          <hr/>
          <p class="mt-2">Số tài khoản: <b>0111 104 059 003</b></p>
          <hr/>
          <p class="mt-2">Chủ tài khoản: <b>CONG TY CP GIAO DUC EDUCA CORPORATION</b></p>
          <hr/>
          <p class="mt-2">Ví dụ: <b>0985004386 Nguyen Van A</b></p>
        </div>
      </div>
    </div>

  </section>
  <section class="container edupia-mw-1230 text-left">
    <div class="row">
      <div class="col">
        <p class="tex-left text-noitice">Lưu ý:</p>
        <ul class="text-font-size-18 text-font-weight-400 pl-4">
          <li>
            <p>
              Nếu phụ huynh thực hiện chuyển khoản không đúng cú pháp nêu trên, vui lòng lên hệ tổng đài
              093.120.8686 để được hướng dẫn xác nhận thanh toán
            </p>
          </li>
          <li>
            <p>
              Để đảm bảo giao dịch thành công với thời gian nhanh nhất, phụ huynh có thể lựa chọn dịch vụ
              chuyển khoản nhanh hoặc chuyển khoản 24/7 của ngân hàng.
            </p>
          </li>
        </ul>
      </div>
  </section>
  <section class="container edupia-mw-1230 text-left vnpay-block">
    <div class="row">
      <div class="col">
        <p class="text-font-size-24 text-blue-300 vnpay-title">3. Thanh toán trực tuyến (VNPAY)</p>
        <p class="m-0 text-font-size-18 text-font-weight-400">Phụ huynh có thể sử dụng hình thức thanh toán này
          với hầu hết các loại thẻ tín dụng và thẻ ATM do các ngân hàng nội địa phát hành.</p>
        <div class="row">
          <div class="col">
            <p class="tex-left text-noitice">Lưu ý:</p>
            <ul class="text-font-size-18 text-font-weight-400 pl-4">
              <li>
                <p>
                  Đối với hình thức chuyển khoản và thanh toán trực tuyến: Sau khi hoàn tất các bước thanh toán theo hướng dẫn, nếu sau quá 30 phút Phụ huynh không nhận được bất cứ thông báo nào. Phụ huynh vui lòng liên hệ với chúng tôi để nhận được kết quả giao dịch. Phụ huynh không nên thực hiện tiếp giao dịch để tránh trường hợp bị trừ tiền thêm một lần.
                </p>
              </li>
              <li>
                <p>
                  Bộ sản phẩm sẽ được chuyển đến địa chỉ nhận hàng trong vòng 4 ngày từ thời điểm đăng ký.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </section>
</main>
@endsection