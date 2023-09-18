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
      <span class="d-inline mr-2">Hà nội</span>
      <div class="label">
        <span>Phòng Marketing</span>
      </div>
    </div>
    <hr/>
    <div class="d-flex w-70 justify-content-center">
      <div>
        <span>Địa điểm: Hà Nội</span>
      </div>
      <div>
        <span>Bộ phận: Phòng Marketing</span>
      </div>
      <div>
        <span>Hạn nộp hồ sơ: 30/10/2023</span>
      </div>
      <div>
        <span>
          Hình thức làm việc: Toàn thời gian
        </span>
      </div>
    
    </div>
  </section>
  <section>

  </section>
</main>
@endsection
