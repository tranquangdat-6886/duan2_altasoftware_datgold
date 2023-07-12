@extends('frontend.layouts.apps')
@section('title', 'Sự kiện')
@section('main-content')
    <section class="pt-5 khung">
        <div class="container-fluid" style="z-index: 10;">
            <div class="row mt-4 mb-3 " style="z-index: 10;">
                <div class="col-lg-12 text-center " style="z-index: 10;">
                    <h1 class="sukiennoibat">Thanh toán thành công</h1>
                </div>
            </div>
        </div>
        <div class="container ">

            <div class="row position-relative  align-items-center ">
                <img src="{{ asset('frontend/assets/images/khungsukien.png') }}" alt="" class="img-fluid khungtttc">
                <div class="  position-absolute translate-middle thanhtoantt_nguoi" style="z-index: 11;">
                    <img src="{{ asset('frontend/assets/images/icon5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="  position-absolute translate-middle tt_left" style="z-index: 11;">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/previous.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="position-absolute translate-middle khoi_ttthanhcong">

                    <div class="col-lg-10 ">
                        <div class="row ">
                            <div class="col-lg-3 sukien_khung">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent border-0 text-center pt-3">
                                        {!! $qrCode['qrCodeSvg'] !!}
                                    </div>
                                    <div class="card-body">
                                        <h1 class="mb-3 thanhcong_title">{{ $qrCode['name'] }}</h1>
                                        <div class="text-center ps-5">
                                            <p class="thanhcong_title2 mb-0">VÉ CỔNG</p>
                                            <p class="mt-0 gach ms-5">---</p>
                                            <p class="thanhcong_date">Ngày sử dụng: {{ $qrCode['ticketDate'] }}</p>
                                            <p> <img src="{{ asset('frontend/assets/images/tick_thanhcong.png') }}"
                                                    class="img-fluid tick_thanhcong" alt=""></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute translate-middle  tt_right" style="z-index: 11;">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/next.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="position-absolute translate-middle  footer_thanhtoantt" style="z-index: 11;">
                    <p class="tttc_quantiti">
                        Số lượng: 12 vé
                    </p>
                </div>
                <div class="position-absolute translate-middle  footer_right_thanhtoantt" style="z-index: 11;">
                    <p class="tttc_quantiti">
                        Trang 1/3
                    </p>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center p-0">
                            <a href="">
                                <img src="{{ asset('frontend/assets/images/taive.png') }}" class="img-fluid" alt=""
                                    style="width: 160px; height: 40px;">
                            </a>
                        </div>
                        <div class="col-lg-6 text-center p-0">
                            <a href="">
                                <img src="{{ asset('frontend/assets/images/guiemail.png') }}" class="img-fluid"
                                    alt="" style="width: 160px; height: 40px;">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
