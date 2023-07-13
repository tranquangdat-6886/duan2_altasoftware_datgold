<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trang = 10;
        $pages = Event::paginate($trang);
        return view('backend.pages.events.list_events')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.events.add_events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'startDate' => 'required|date',
            'status' => 'required|int:0,1',
            'endDate' => 'required|date',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'startDate.required' => 'Vui lòng chọn ngày bắt đầu diễn ra sự kiện',
            'endDate.required' => 'Vui lòng chọn ngày kết thúc sự kiện',
            'name.required' => 'Không được bỏ trống tên sự kiện',
            'avatar.required' => 'Vui lòng chọn avatar sự kiện',
            'description1.required' => 'Vui lòng nhập mô tả',
            'description2.required' => 'Vui lòng nhập mô tả',
            'description3.required' => 'Vui lòng nhập mô tả',
            'status.required' => 'Vui lòng chọn trạng thái',
        ]);

        $event = new Event();
        $event->name = $request->input('name');
        $event->startDate = $request->input('startDate');
        $event->endDate = $request->input('endDate');
        $event->title = $request->input('title');
        $event->status = $request->input('status');

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            $event->avatar = $imagePath;
        }

        $content1 = $request->input('description1');
        $content2 = $request->input('description2');
        $content3 = $request->input('description3');
        $event->description1 = $content1;
        $event->description2 = $content2;
        $event->description3 = $content3;

        $event->save();

        // Xử lý các tệp tin đính kèm (nếu có)
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            // Lưu trữ tệp tin và lấy URL
            $path = $file->store('uploads');
            $url = Storage::url($path);
        }

        return redirect()->route('events.index');
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