<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return view('frontend.pages.events');
    }

    public function detail()
    {
        return view('frontend.pages.detail_events');
    }
}