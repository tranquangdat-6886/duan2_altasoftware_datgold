<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::with('ticket')->get();
        return view('frontend.pages.events')->with('events', $events);
    }

    public function detail($ID_EVEN)
    {
        $event = Event::find($ID_EVEN);
        $ticket = Ticket::where('ID_EVEN', $ID_EVEN)->first();
        return view('frontend.pages.detail_events')->with('event', $event)->with('ticket', $ticket);
    }
}