<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $pages = Ticket::with('event', 'order')->paginate(10);
        $tongvedat = 0;
        $tongvebandau = 0;
        $veton = 0;
        $vnp = Payment::sum('vnp_Amount');
        $doanhthu = intval($vnp);
        foreach ($pages as $ticket) {
            $order = Order::where('ID_TICKET', $ticket->ID_TICKET)
                ->where('status', 1)->get();
            $tongvedat += $order->sum('quantity');
        }
        if (isset($ticket)) {
            $tongvebandau = ($ticket->quantity) + $tongvedat;
            $veton = $tongvebandau - $tongvedat;
            $vnp = Payment::sum('vnp_Amount');        
            $doanhthu = number_format( floor($vnp / 100), 0, ',', '.');
        }

        return view('backend.dashboard')->with('pages', $pages)->with('tongvebandau',  $tongvebandau)->with('tongvedat', $tongvedat)->with('veton', $veton)->with('doanhthu', $doanhthu);
    }
}