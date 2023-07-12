<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Ticket;


use Intervention\Image\ImageManagerStatic as Image;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function pay()
    {
        return view('frontend.pages.pay');
    }
    public function paysuccess()
    {
        return view('frontend.pages.pay_success');
    }
    public function create(Request $request)
    {
        // $request->validate([
        //     'package'=>'required',
        //     'quantity' => 'required|integer|max:10',
        //     'ticketDate'=>'required',
        //     'name'=>'required|string|max:255',
        //     'phoneNumber'=>'required|integer',
        //     'email'=>'required|string|max:255',
        // ],[
        //     'package.required'=>'Vui lòng chọn gói vé',
        //     'quantity.required'=>'Số lượng vé mỗi lần đặt không quá 10',
        //     'ticketDate.required'=>'Chọn ngày sử dụng',
        //     'name.required'=>'Vui lòng nhập đầy đủ họ tên',
        //     'phoneNumber.required'=>'Nhập số điện thoại là dãy số nguyên',
        //     'email.required'=>'Vui lòng nhập email',
        // ]);

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->phoneNumber = $request->input('phoneNumber');
        $customer->email = $request->input('email');
        $customer->ticketDate = $request->input('ticketDate');
        $customer->status = 0;
        $customer->save();
        $package = $request->input('package');
        $ticket = Ticket::where('ID_PACK', $package)->first();

        $order = new Order();
        $order->ID_CU = $customer->ID_CU;
        $order->ID_TICKET = $ticket->ID_TICKET;
        $order->quantity = $request->input('quantity');
        $order->save();
        $tongtien = ($ticket->price) * ($order->quantity);
        $detailOrder = new DetailOrder();
        $detailOrder->ID_ORDER = $order->ID_ORDER;
        $detailOrder->price = $tongtien;
        $detailOrder->save();

        return view('frontend.pages.pay')->with([
            'customer' => [
                'name' => $customer->name,
                'phoneNumber' => $customer->phoneNumber,
                'email' => $customer->email,
                'ticketDate' => $customer->ticketDate,
            ],
            'order' => [
                'ID_CU' => $order->ID_CU,
                'ID_TICKET' => $order->ID_TICKET,
                'quantity' => $order->quantity,
            ],
            'detailOrder' => [
                'ID_ORDER' => $detailOrder->ID_ORDER,
                'price' => $detailOrder->price,
            ],

        ]);
    }
    public function checkout(Request $request)
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_TmnCode = "W5KCFHGJ";
        $vnp_HashSecret = "VFVOAUJQDXJYBCGRSLQXJSULUMPJPQTZ";
        $customer = $request->input('ID_CU');
        $ticket = $request->input('ID_TICKET');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $vnp_Returnurl = route('callback', ['ID_CU' => $customer, 'ID_TICKET' => $ticket, 'quantity' => $quantity]);

        // Lấy thông tin từ form


        // $cardDate = $request->input('cardDate');

        // Các thông tin đơn hàng
        //$vnp_TxnRef = '6886'; // Mã đơn hàng
        $vnp_TxnRef = uniqid(); // Mã đơn hàng ngẫu nhiên
        $vnp_OrderInfo = "Thanh toán đơn hàng datgold"; // Thông tin đơn hàng (nội dung chuyển tiền)
        $vnp_OrderType = "Vé little & LITTLE"; // Loại đơn hàng
        $vnp_Amount = $price * 100000; // Số tiền thanh toán
        $vnp_Locale = "vn"; // Ngôn ngữ
        $vnp_BankCode = "NCB"; // Mã ngân hàng VNBANK
        $vnp_IpAddr = $request->ip(); // Địa chỉ IP của người dùng

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );

        // Chuyển hướng đến trang thanh toán VNPay
        return redirect()->to($vnp_Url);
    }

    // app/Http/Controllers/PaymentController.php
    public function callback(Request $request, $ID_CU, $ID_TICKET, $quantity)
    {
        // Lưu dữ liệu trả về vào cơ sở dữ liệu
        $responseData = $request->all();
        $customer = Customer::find($ID_CU);
        $customer->status = 1;
        $customer->save();

        $ticket = Ticket::find($ID_TICKET);
        $ticket->quantity -= $quantity;
        $ticket->save();

        $order = Order::where('ID_CU', $ID_CU)->get();

        $name = $customer->name;
        $ticketDate = $customer->ticketDate;
        $soluong = $order->sum('quantity');
        $price = $ticket->price;

        // Tạo mã QR từ thông tin
        $qrCodeData = [
            'name' => $name,
            'soluong' => $soluong,
            'price' => $price,
            'ticketDate' => $ticketDate,
        ];

        $qrCodeSvg = QrCode::format('svg')->generate(json_encode($qrCodeData));
        $qrCode = [
            'name' => $name,
            'soluong' => $soluong,
            'ticketDate' => $ticketDate,
            'price' => $price,
            'qrCodeSvg' => $qrCodeSvg,
        ];

        // Redirect đến trang 'paysuccess' với thông tin mã QR
        return view('frontend.pages.pay_success', compact('qrCode'));
    }
}
