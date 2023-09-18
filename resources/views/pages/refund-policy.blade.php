@extends('layouts.main')
@section('og-title')
Chính sách hoàn trả
@endsection
@section('content')
<main class="refund-policy text-center">
  <section class="mx-auto refund-title">
    <p class="m-0 text-font-size-36">Chính Sách Hoàn Trả</p>
  </section>
  <section class="container edupia-mw-1230 text-left refund-method text-font-weight-400 text-font-size-18">
    <div class="row">
      <div class="col">
        <span class="tex-left  refund-head">
          <b>EDUPIA</b> xây dựng các chính sách hậu mãi dựa trên niềm đam mê đối với sản phẩm mà chúng tôi cung cấp, cùng với cam kết bảo vệ quyền lợi khách hàng để phụ huynh yên tâm trải nghiệm những giờ học ngoại ngữ thật vui và bổ ích cùng các con.
        </span>
        <p class="text-font-size-24 text-font-weight-600 text-blue-300 pl-1">
          1. Đối với khách hàng đã thanh toán
        </p>
        <div>
          <p class="m-0">
            Khách hàng được chuyển đổi gói học, hủy đơn hàng theo yêu cầu.
          </p>
          <p>
            Cách làm: liên hệ tổng đài Edupia 093.120.8686 (8h - 21h30 từ T2 đến CN) để được hỗ trợ.
          </p>
        </div>
        <p class="text-font-size-24 text-font-weight-600 text-blue-300 pl-1">
          2. Đối với khách hàng đã thanh toán
        </p>
        <div>
          <p class="text-blue-700">
            2.1 Chuyển đổi
          </p>
          <p>
            2.1.1 Chính sách
          </p>
          <ul class="pl-4">
            <li>
              <p>
                Khách hàng được chuyển đổi sang các gói học có giá trị tương đương hoặc lớn hơn theo giá niêm yết trên website chính thức tại thời điểm xác nhận nhu cầu chuyển đổi. Không được chuyển đổi sang các gói học có giá trị thấp hơn.
              </p>
            </li>
            <li>
              <p>
                Áp dụng cho tất cả các sản phẩm của Edupia.
              </p>
            </li>
          </ul>
        </div>
        <div>
          <p>
            2.1.2. Điều kiện
          </p>
          <ul class="pl-4">
            <li>
              <p>
                Mã kích hoạt <b>kích hoạt</b> trong vòng 02 ngày.
              </p>
            </li>
            <li>
              <p>
                Khách hàng được hỗ trợ <b>đổi 01 lần/mã kích hoạt.</b>
              </p>
            </li>
            <li>
              <p>
                <b>Không</b> áp dụng đối với Khách hàng mua sản phẩm trong các chương trình khuyến mãi có quà tặng là hiện vật.
              </p>
            </li>
          </ul>
        </div>
        <div class=" mb-4">
          <p>
            2.1.3. Phương thức thanh toán chênh lệch và thời gian thực hiện
          </p>
          <ul class="pl-4">
            <li>
              <p>
                Đối với trường hợp chuyển đổi sang gói học có giá trị lớn hơn gói học ban đầu, quý khách vui lòng thanh toán phí chênh lệch giá bằng phương thức chuyển khoản ngân hàng.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <section class="banking-info container-fluid mb-4 py-2">
    <div class="container edupia-mw-1230 text-left">
      <div class="row">
        <div class="col-2 qr-block">
          <img class="w-100" src="{{ asset('images/icons/homepage/VnpayQR.png') }}" alt="qr-info" />
          <div class="mt-1 text-font-size-16 text-font-weight-500 text-gray-300 description text-center">
            <span>Quét mã QR hoặc</span>
            <span>hoặc chuyển khoản theo</span>
            <span>số tài khoản</span>
          </div>
        </div>
        <div class="col-10 info-block">
          <p>Ngân hàng: <b>Quân đội MB - Chi nhánh Hoàn Kiếm</b></p>
          <hr />
          <p class="mt-2">Số tài khoản: <b>0111 104 059 003</b></p>
          <hr />
          <p class="mt-2">Chủ tài khoản: <b>CONG TY CP GIAO DUC EDUCA CORPORATION</b></p>
          <hr />
          <p class="mt-2"><b>Nội dung chuyển khoản: CD &lt;họ và tên&gt;&lt;số điện thoại&gt;&lt;mã kích hoạt hoặc seri thẻ&gt;&lt;gói học muốn đổi&gt;</b></p>
        </div>
      </div>
    </div>

  </section>
  <section class="container edupia-mw-1230 text-left text-font-size-18 text-font-weight-400 mb-3">
    <ul class="pl-4 mb-1">
      <li>
        <p>Ví dụ:</p>
      </li>
    </ul>
    <ul class="pl-8">
      <li>
        <p>Tên khách hàng: <b>Nguyễn Văn A</b></p>
      </li>
      <li>
        <p>
          Số điện thoại đăng ký mua: <b>0931208686</b>
        </p>
      </li>
      <li>
        <p>
          Mã kích hoạt: <b>abc123</b>
        </p>
      </li>
      <li>
        <p>
          Gói học muốn đổi: <b>Edupia 2 năm</b>
        </p>
      </li>
      <li>
        <p>
          Nội dung chuyển khoản: <b>[CD] Nguyen Van A 0931208686 abc123 kid2y</b>
        </p>
      </li>
    </ul>
    <p class="pl-8 text-font-weight-600">Lưu ý:</p>
    <ul class="pl-8">
      <li>
        <p>Nếu quá 48h kể từ thời điểm Edupia xác nhận yêu cầu chuyển đổi của quý khách thành công (Không tính thứ 7, chủ nhật và các ngày nghỉ lễ, tết), chúng tôi chưa nhận được khoản thanh toán chênh lệch; yêu cầu chuyển đổi của quý khách sẽ <b>Tự động bị HỦY</b>. Cách làm: liên hệ tổng đài CSKH <b>093.120.8686</b> (8h - 21h30 từ T2 đến CN) để được hỗ trợ</p>
      </li>

    </ul>
  </section>
  <section class="container policy edupia-mw-1230 text-left refund-method text-font-weight-400 text-font-size-18">
    <p class="text-blue-700">
      2.2. Hoàn hủy
    </p>
    <p>
      2.2.1 Chính sách
    </p>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col-2" class="text-center no-border-right">STT</th>
            <th scope="col-5" class="text-center no-border-left no-border-right">Trường hợp chấp nhận hoàn hủy</th>
            <th scope="col-5" class="text-center no-border-left">Điều kiện</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">1</th>
            <td>Thiết bị không đáp ứng, không cài đặt được và không sử dụng được chương trình</td>
            <td>
              <ul class="pl-4 mb-0">
                <li>
                  <p>Mã kích hoạt chưa được kích hoạt</p>
                </li>
                <li>
                  <p class="m-0">Tất cả các thiết bị liệt kê đều không đáp ứng yêu cầu kỹ thuật của chương trình</p>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">2</th>
            <td>Lỗi kỹ thuật phần mềm, chương trình không sửa được</td>
            <td>
              <ul class="pl-4 mb-0">
                <li>
                  <p class="m-0">Bị lỗi trên tất cả các thiết bị được liệt kê</p>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center align-middle">3</th>
            <td class="align-middle">Tư vấn viên tư vấn sai</td>
            <td>
              <ul class="pl-4 mb-0">
                <li>
                  <p class="m-0">Sai thông tin chương trình:</p>
                </li>
              </ul>
              <ul class="pl-8 mb-0">
                <li>
                  <p>
                    Chính sách gói học
                  </p>
                </li>
                <li>
                  <p>
                    Nội dung
                  </p>
                </li>
                <li>
                  <p>
                    Cách học
                  </p>
                </li>
                <li>
                  <p class="m-0">
                    Quyền lợi khách hàng
                  </p>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">4</th>
            <td>Chuyển khoản nhầm tới công ty (Cổng VNPAY hoặc STK công ty)</td>
            <td>
              <ul class="pl-4 mb-0">
                <li>
                  <p class="m-0">Khi công ty xác nhận giao dịch thành công của khách hàng</p>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    </div>
  </section>
</main>
@endsection
