@extends('backend.layouts.apps')
@section('title', 'datveVNpay')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- <form action="{{ route('order.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label">Nhập số tiền:</label>
                            <input type="text" name="amount" class="form-control">
                            <input type="date" name="YmdHis" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="redirect" class="btn btn-success">
                        Thanh toán VNPay
                    </button>
                </form> --}}
                <form id="frmCreateOrder" action="https://sandbox.vnpayment.vn/button/websrc.html" method="POST"
                    target="_top"> <input type="hidden" name="cmd" value="pay"> <input type="hidden"
                        name="hosted_button_id" value="QBiMQ9teAP"> <input type="hidden" name="hosted_button_token"
                        value="e75c61b3a9252d6dc246f02c512499247b63c07b8f82182278d78aec459ff4ee"> <img
                        alt="VNPAY - Thanh toan online" border="0" class="btnRedirect"
                        src="https://sandbox.vnpayment.vn/button/Images/paynow-1.png"> </form>
                <script src="https://merchant.vnpay.vn/Scripts/jquery-3.5.1.min.js"></script>
                <link href="https://merchant.vnpay.vn/Scripts/lib/vnpayframe.css" rel="stylesheet" />
                <script src="https://merchant.vnpay.vn/Scripts/lib/vnpayframe.js"></script>
                <script src="https://merchant.vnpay.vn/Scripts/lib/openbutton.js"></script>
            </div>
        </div>

    </div>
@endsection
