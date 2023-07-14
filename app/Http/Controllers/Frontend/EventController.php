<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Setting;
use App\Models\Ticket;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $settings = Setting::find(1);
        $events = Event::with('ticket')->get();
        return view('frontend.pages.events')->with('events', $events)->with('settings', $settings);
    }

    public function detail($ID_EVEN)
    {
        $settings = Setting::find(1);
        $event = Event::find($ID_EVEN);
        $ticket = Ticket::where('ID_EVEN', $ID_EVEN)->first();
        return view('frontend.pages.detail_events')->with('event', $event)->with('ticket', $ticket)->with('settings',$settings);
    }
}