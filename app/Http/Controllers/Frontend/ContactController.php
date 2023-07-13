<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contact');
    }
    //
    public function seend(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phoneNumber = $request->input('phoneNumber');
        $customer->address = $request->input('address');

        $customer->save();

        $contact = new Contact();
        $contact->ID_CU = $customer->ID_CU;
        $contact->content = $request->input('content');
        $contact->save();

        return view('frontend.pages.contact')->with('thongbao', 'gui thanh cong');
    }
}