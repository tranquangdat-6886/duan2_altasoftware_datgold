<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::with('ticket')->get();
        return view('frontend.pages.events')->with('events', $events);
    }

    public function detail()
    {
        return view('frontend.pages.detail_events');
    }
}