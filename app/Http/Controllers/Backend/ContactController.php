<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(){
        $pages = Customer::with('contact')->whereNotNull('address')->paginate(10);

        return view('backend.pages.contacts.list_contacts')->with('pages', $pages);
    }
}