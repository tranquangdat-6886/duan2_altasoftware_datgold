<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $trang = 10;
        $pages = Customer::orderBy('ID_CU', 'desc')->paginate($trang);
        return view('backend.pages.orders.list_orders')->with('pages', $pages);
    }
}
