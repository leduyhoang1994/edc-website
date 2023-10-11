@extends('layouts.main')
@section('og-title')
Chính sách hoàn trả
@endsection
@section('content')
<main class="refund-policy text-center">
  <section class="mx-auto refund-title">
    <p class="m-0 text-font-size-40">Chính Sách Hoàn Trả</p>
  </section>
  <section class="container edupia-mw-1230 text-left refund-method text-font-weight-400 text-font-size-18">
    <div class="row">
      <div class="col">
        <span class="tex-left refund-head">
          <span class="text-font-weight-600">EDUPIA</span> xây dựng các chính sách hậu mãi dựa trên niềm đam mê đối với sản phẩm mà chúng tôi cung cấp, cùng với cam kết bảo vệ quyền lợi khách hàng để phụ huynh yên tâm trải nghiệm những giờ học ngoại ngữ thật vui và bổ ích cùng các con.
        </span>
        <p class="text-font-size-24 text-font-weight-600 text-blue-300 pl-1">
          1. Đối với khách hàng đã thanh toán
        </p>
        <div>
          <p class="m-0">
            Khách hàng được chuyển đổi gói học, hủy đơn hàng theo yêu cầu.
          </p>
          <p class="mb-3">
            Cách làm: liên hệ tổng đài Edupia 093.120.8686 (8h - 21h30 từ T2 đến CN) để được hỗ trợ.
          </p>
        </div>
        <p class="text-font-size-24 text-font-weight-600 text-blue-300 pl-1">
          2. Đối với khách hàng đã thanh toán
        </p>
        <div>
          <p class="text-blue-550">
            2.1 Chuyển đổi
          </p>
          <p>
            2.1.1 Chính sách
          </p>
          <ul class="pl-4">
            <li>
              <p class="mb-2">
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
          <p class="mb-2">
            2.1.2. Điều kiện
          </p>
          <ul class="pl-4">
            <li>
              <p class="mb-2">
                Mã kích hoạt <span class="text-font-weight-600">kích hoạt</span> trong vòng 02 ngày.
              </p>
            </li>
            <li>
              <p class="mb-2">
                Khách hàng được hỗ trợ <span class="text-font-weight-600">đổi 01 lần/mã kích hoạt.</span>
              </p>
            </li>
            <li>
              <p class="mb-3">
                <span class="text-font-weight-600">Không</span> áp dụng đối với Khách hàng mua sản phẩm trong các chương trình khuyến mãi có quà tặng là hiện vật.
              </p>
            </li>
          </ul>
        </div>
        <div class="mb-4">
          <p>
            2.1.3. Phương thức thanh toán chênh lệch và thời gian thực hiện
          </p>
          <ul class="pl-4">
            <li>
              <p class="mb-0">
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
        <div class="col-sm-2 qr-block">
          <img class="w-100" src="{{ asset('images/icons/homepage/VnpayQR.png') }}" alt="qr-info" />
          <div class="mt-1 text-neutral text-font-size-16 text-font-weight-500 text-gray-300 description text-center">
            <span>Quét mã QR hoặc</span>
            <span>hoặc chuyển khoản theo</span>
            <span>số tài khoản</span>
          </div>
        </div>
        <div class="col-sm-10 info-block">
          <p>Ngân hàng: <span class="text-font-weight-600">Quân đội MB - Chi nhánh Hoàn Kiếm</span></p>
          <hr class="mb-2 mt-2" />
          <p class="mt-2">Số tài khoản: <span class="text-font-weight-600">0111 104 059 003</span></p>
          <hr class="mb-2 mt-2" />
          <p class="mt-2">Chủ tài khoản: <span class="text-font-weight-600">CONG TY CP GIAO DUC EDUCA CORPORATION</span></p>
          <hr class="mb-2 mt-2" />
          <p class="mt-2"><span class="text-font-weight-600">Nội dung chuyển khoản: CD &lt;họ và tên&gt;&lt;số điện thoại&gt;&lt;mã kích hoạt hoặc seri thẻ&gt;&lt;gói học muốn đổi&gt;</span></p>
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
        <p class="mb-2">Tên khách hàng: <span class="text-font-weight-600">Nguyễn Văn A</span></p>
      </li>
      <li>
        <p class="mb-2">
          Số điện thoại đăng ký mua: <span class="text-font-weight-600">0931208686</span>
        </p>
      </li>
      <li>
        <p class="mb-2">
          Mã kích hoạt: <span class="text-font-weight-600">abc123</span>
        </p>
      </li>
      <li>
        <p class="mb-2">
          Gói học muốn đổi: <span class="text-font-weight-600">Edupia 2 năm</span>
        </p>
      </li>
      <li>
        <p>
          Nội dung chuyển khoản: <span class="text-font-weight-600">[CD] Nguyen Van A 0931208686 abc123 kid2y</span>
        </p>
      </li>
    </ul>
    <p class="pl-8 text-font-weight-600">Lưu ý:</p>
    <ul class="pl-8  mb-3">
      <li>
        <p class="mb-0">Nếu quá 48h kể từ thời điểm Edupia xác nhận yêu cầu chuyển đổi của quý khách thành công (Không tính thứ 7, chủ nhật và các ngày nghỉ lễ, tết), chúng tôi chưa nhận được khoản thanh toán chênh lệch; yêu cầu chuyển đổi của quý khách sẽ <span class="text-font-weight-600">Tự động bị HỦY</span>. Cách làm: liên hệ tổng đài CSKH <span class="text-font-weight-600">093.120.8686</span> (8h - 21h30 từ T2 đến CN) để được hỗ trợ</p>
      </li>
    </ul>
  </section>
  <section class="container policy edupia-mw-1230 text-left refund-method text-font-weight-400 text-font-size-18">
    <p class="text-blue-550">
      2.2. Hoàn hủy
    </p>
    <p class="mb-3">
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
            <th scope="row" class="text-center align-middle text-font-weight-600">1</th>
            <td class="align-middle">Thiết bị không đáp ứng, không cài đặt được và không sử dụng được chương trình</td>
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
            <th scope="row" class="text-center text-font-weight-600">2</th>
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
            <th scope="row" class="text-center align-middle text-font-weight-600">3</th>
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
            <th scope="row" class="text-center text-font-weight-600">4</th>
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

    <div class="mt-2">
      <p>Điều kiện:</p>
      <ul class="pl-4">
        <li>
          <p class="mb-2">Không áp dụng đối với khách hàng mua sản phẩm trong các chương trình khuyến mãi có quà tặng là hiện vật.</p>
        </li>
      </ul>    
      <p>2.2.2 Phương thức hoàn tiền và thời gian thực hiện</p>
      <ul class="pl-4">
        <li>
          <p class="mb-2">
            EDUPIA sẽ tiến hành hoàn tiền đến quý khách qua hình thức chuyển khoản ngân hàng sau khi hoàn tất quy trình kiểm tra và xét duyệt. Quy trình này được thực hiện trong 15 ngày làm việc (Không tính thứ 7, chủ nhật và các ngày nghỉ lễ, tết). Thông tin về thời gian hoàn tiền cụ thể cho từng trường hợp sẽ được cập nhật đến quý khách qua email, tin nhắn.
          </p>
        </li>
        <li>
          <p>Cách làm: Liên hệ tổng đài Edupia <span class="text-font-weight-600">093.120.8686</span> để được hỗ trợ.</p>
        </li>
      </ul>
      <p class="text-font-weight-600 mb-2">
        Lưu ý:
      </p>
      <ul class="pl-4">
        <li>
          <p class="mb-2">
            Theo quy định của ngân hàng phát hành thẻ và quy trình phối hợp làm việc giữa ngân hàng Vietcombank và các ngân hàng khác, sau khi thực hiện lệnh REFUND , khách hàng sẽ nhận được tiền hoàn trả trong khoảng từ 10-30 ngày kể từ thời điểm thực hiện lệnh.
          </p>
        </li>
        <li>
          <p>
            Trường hợp Khách hàng muốn biết chính xác về thời gian sẽ nhận được tiền hoàn trả, Khách hàng vui lòng chủ động liên lạc với ngân hàng phát hành thẻ của mình để được hỗ trợ
          </p>
        </li>
      </ul>
    </div>

  </section>
</main>
@endsection
