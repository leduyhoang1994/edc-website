@extends('layouts.main')
@section('og-title')
Thanh toán
@endsection
@section('content')
<main class="payment-method text-center text-font-weight-600">
  <section class="mx-auto payment-title">
    <p class="m-0 text-font-size-36 text-uppercase">Hình Thức Thanh Toán</p>
  </section>
  <section class="container text-left">
    <div class="row">
      <div class="col">
        <p class="m-0 tex-left ">Để tiến hành thanh toán, Phụ huynh vui lòng chọn gói học muốn mua và chọn một
          trong các hình thức thanh toán sau:</p>
        <p class="m-0 text-font-size-24 text-blue-300">1. Thanh toán khi nhận hàng (COD)</p>
        <ul class="text-font-size-18 text-font-weight-400 pl-5 w-70">
          <li>
            <p class="m-0">
              Phương thức thu tiền tận nơi áp dụng đối với mọi khách hàng thông qua các đối tác vận
              chuyển. Khách hàng có thể đặt hàng qua website Edupia.vn hoặc qua tổng đài điện thoại
              093.120.8686. Nhân viên của chúng tôi sẽ gọi điện xác nhận với khách hàng về sản phẩm và
              phương thức vận chuyển.
            </p>
          </li>
          <li>
            <p class="m-0">
              Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho nhân viên giao nhận
              ngay sau khi hoàn tất kiểm tra hàng hóa và nhận phiếu giao hàng
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="m-0 text-font-size-24 text-blue-300">2. Chuyển khoản qua tài khoản ngân hàng</p>
        <p class="m-0">Vui lòng chuyển khoản theo thông tin dưới đây:</p>
      </div>
    </div>
  </section>
  <section class="banking-info container-fluid">
    <div class="container text-left">
      <div class="row">
        <div class="col-2 qr-block">
          <img src="" alt="qr-info" />
          <div class="description">
            <span>Quét mã QR hoặc</span>
            <span>hoặc chuyển khoản theo</span>
            <span>số tài khoản</span>
          </div>
        </div>
        <div class="col-10 info-block">
          <p>Ngân hàng: Quân đội MB - Chi nhánh Hoàn Kiếm</p>
          <p>Số tài khoản: 0111 104 059 003</p>
          <p>Chủ tài khoản: CONG TY CP GIAO DUC EDUCA CORPORATION</p>
          <p>Ví dụ: 0985004386 Nguyen Van A</p>
        </div>
      </div>
    </div>
    
  </section>
</main>
@endsection