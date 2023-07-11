@extends('frontend.layouts.apps')
@section('title', 'Thanh toán')
@section('main-content')
    <section class="pt-5 khung">
        <div class="container-fluid" style="z-index: 10;">
            <div class="row mt-4 mb-3 " style="z-index: 10;">
                <div class="col-lg-12 text-center " style="z-index: 10;">
                    <h1 class="sukiennoibat">Thanh toán</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="{{ route('order.create') }}" method="POST">
                @csrf
                <!-- Thêm csrf token -->
                <div class="row">
                    <div class="col-lg-12 position-relative">
                        <img src="{{ asset('frontend/assets/images/nenthanhtoan.png') }}" class="img-fluid" alt="">
                        <div class="position-absolute translate-middle tt_hinhnguoi">
                            <img src="{{ asset('frontend/assets/images/icon4.png') }}" class="img-fluid tt_hinhnguoi1"
                                alt="">
                        </div>
                        <div class="position-absolute translate-middle absolute_thanhtoan">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="" class="label_thanhtoan">Số tiền thanh toán</label>
                                    <input type="text" name="price" class="form-control thanhtoan_price">
                                </div>
                                <div class="col-lg-2">
                                    <label for="" class="label_thanhtoan">Số lượng vé</label>
                                    <input type="text" name="quantity" class="form-control thanhtoan_quantiti">
                                </div>
                                <div class="col-lg-5">
                                    <label for="" class="label_thanhtoan">Ngày sử dụng</label>
                                    <input type="text" name="ticketDate" class="form-control thanhtoan_date">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-7">
                                    <label for="" class="label_thanhtoan">Thông tin liên hệ</label>
                                    <input type="text" name="name" class="form-control thanhtoan_contact">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-5">
                                    <label for="" class="label_thanhtoan">Điện thoại</label>
                                    <input type="text" name="phoneNumber" class="form-control thanhtoan_contact">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-7">
                                    <label for="" class="label_thanhtoan">Email</label>
                                    <input type="text" name="email" class="form-control thanhtoan_contact">
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute translate-middle absolute_thanhtoan1">
                            <div class="row ">
                                <div class="col-lg-12">
                                    <label for="" class="label_thanhtoan">Số thẻ</label>
                                    <input type="text" name="cardNumber" class="form-control thanhtoan_contact1">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <label for="" class="label_thanhtoan">Họ tên chủ thẻ</label>
                                    <input type="text" name="cardHolder" class="form-control thanhtoan_contact1">
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-lg-10 ">
                                    <label for="" class="label_thanhtoan">Ngày hết hạn</label>
                                    <input type="text" name="cardDate" class="form-control thanhtoan_contact">
                                </div>
                                <div class="col-lg-2 ps-0">
                                    <label for=""></label>
                                    <img src="{{ asset('frontend/assets/images/chonngay.png') }}" alt=""
                                        class="img-fluid select-image" id="chonngay">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <label for="" class="label_thanhtoan">CVV/CVC</label>
                                    <input type="password" name="cvv" class="form-control thanhtoan_quantiti">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="redirect" class="btn bg-transparent">
                                        <img src="{{ asset('frontend/assets/images/thanhtoan.png') }}" alt=""
                                            class="img-fluid nutthanhtoan">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </section>
@endsection
