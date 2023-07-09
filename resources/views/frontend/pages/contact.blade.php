@extends('frontend.layouts.apps')
@section('title', 'Sự kiện')
@section('main-content')
    <section class="pt-5 khung">
        <div class="container-fluid" style="z-index: 10;">
            <div class="row mt-4 mb-3 " style="z-index: 10;">
                <div class="col-lg-12 text-center " style="z-index: 10;">
                    <h1 class="sukiennoibat">Liên hệ</h1>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row ">
                <div class="col-lg-8 mx-0  text-center position-relative align-items-center">
                    <img src="{{ asset('frontend/assets/images/khunglienhe.png') }}" class="img-fluid" alt="">
                    <div class="position-absolute translate-middle absolute-lienhe">
                        <p id="lienhe_title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                            volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                        </p>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Tên" name="name" class="form-control lienhe_ten">
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Email" name="email" class="form-control lienhe_email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Số điện thoại" name="phoneNumber"
                                    class="form-control lienhe_ten">
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Địa chỉ" name="address"
                                    class="form-control lienhe_email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <textarea name="message" id="lienhe_loinhan" class="form-control" placeholder="Lời nhắn"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn bg-transparent">
                                    <img src="{{ asset('frontend/assets/images/guilienhe.png') }}"
                                        class="img-fluid button_lienhe" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle lienhe_nguoi">
                        <img src="{{ asset('frontend/assets/images/icon3.png') }}"
                        class="img-fluid icon_lienhe" alt="">
                    </div>
                </div>
                <div class="col-lg-4 text-start ps-0 ">
                    <div class="row position-relative">
                        <div class="col-lg-12">
                            <img src="{{ asset('frontend/assets/images/diachi.png') }}" class="img-fluid" alt="">
                            <div class="position-absolute translate-middle absolute_diachi_lienhe">
                                <p class="mb-0 lienhe_diachi">
                                    Địa chỉ
                                </p>
                                <p class="mt-0 lienhe_diachi1">
                                    86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row position-relative">
                        <div class="col-lg-12">
                            <img src="{{ asset('frontend/assets/images/email.png') }}" class="img-fluid" alt="">
                            <div class="position-absolute translate-middle absolute_diachi_lienhe">
                                <p class="mb-0 lienhe_diachi">
                                    Email
                                </p>
                                <p class="mt-0 lienhe_diachi1 ms-3">
                                    investigate@your-site.com
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row position-relative">
                        <div class="col-lg-12">
                            <img src="{{ asset('frontend/assets/images/phone.png') }}" class="img-fluid" alt="">
                            <div class="position-absolute translate-middle absolute_diachi_lienhe">
                                <p class="mb-0 lienhe_dienthoai ms-3">
                                    Điện thoại
                                </p>
                                <p class="mt-0 lienhe_diachi1 ms-3">
                                    +84 145 689 798
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection