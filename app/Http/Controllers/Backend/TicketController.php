<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Package;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trang = 10;
        $pages = Ticket::paginate($trang);
        return view('backend.pages.tickets.list_tickets')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $package = Package::all();
        $event = Event::where('status', 1)->get();
        return view('backend.pages.tickets.add_tickets')->with('package', $package)->with('event', $event);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'package' => 'required|int:1,2,3,4,5,6,7,8,9,10',
            'event' => 'required|int:1,2,3,4,5,6,7,8,9,10',
            'price' => 'required',
            'saleDate' => 'required',
            'status' => 'required|int:0,1',
            'quantity' => 'required|integer',

        ], [
            'name.required' => 'Không để trống tên vé',
            'package.required' => 'Vui lòng chọn gói vé',
            'event.required' => 'Vui lòng chọn sự kiện',
            'price.required' => 'Không để trống giá vé',
            'saleDate.required' => 'Vui lòng chọn ngày mở bán',
            'status.required' => 'Vui lòng chọn trạng thái',
            'quantity.required' => 'Vui lòng nhập số lượng vé',
        ]);
        $ticket = new Ticket();
        $ticket->ID_PACK = $request->input('package');
        $ticket->ID_EVEN = $request->input('event');
        $ticket->name = $request->input('name');
        $ticket->price = $request->input('price');
        $ticket->saleDate = $request->input('saleDate');
        $ticket->status = $request->input('status');
        $ticket->quantity = $request->input('quantity');
        $ticket->save();
        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}