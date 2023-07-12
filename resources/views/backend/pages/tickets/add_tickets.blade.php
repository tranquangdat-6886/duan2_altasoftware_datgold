@extends('backend.layouts.app')
@section('title', 'Events')
@section('main-content')
    <div class=" mt-3 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">Add Tickets</h1>
            </div>
            <div class="col-lg-6 text-end">

            </div>
        </div>
        <form action="{{ route('ticket.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8 text-start">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="name" class="form-label label_altasoftware_add mb-0">Tên vé </label>
                            <input type="text" id="name" name="name" class="form-control button_input "
                                placeholder="Nhập tên vé">
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('name'))
                                @foreach ($errors->get('name') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="name" class="form-label label_altasoftware_add mb-0">Chọn sự kiện </label>
                            <select class="form-select form-select-lg  button_input" aria-label=".form-select-lg example"
                                name="event">
                                <option selected>Chọn sự kiện</option>
                                @foreach ($event as $event)
                                    <option value="{{ $event->ID_EVEN }}">{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('event'))
                                @foreach ($errors->get('event') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="name" class="form-label label_altasoftware_add mb-0">Chọn Gói </label>
                            <select class="form-select form-select-lg  button_input" aria-label=".form-select-lg example"
                                name="package">
                                <option selected>Chọn Gói</option>
                                @foreach ($package as $package)
                                    <option value="{{ $package->ID_PACK }}">{{ $package->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('package'))
                                @foreach ($errors->get('package') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="title" class="form-label label_altasoftware_add mb-0">Nhập giá (VND)</label>
                            <input type="text" id="title" name="price" class="form-control button_input "
                                placeholder="Nhập Price">
                            <span class="mt-1 mb-0 error">
                                @if ($errors->has('price'))
                                    @foreach ($errors->get('price') as $message)
                                        <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                    @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="col-lg-6">
                            <label for="quantity" class="form-label label_altasoftware_add mb-0">Số lượng vé phát
                                hành</label>
                            <input type="text" id="quantity" name="quantity" class="form-control button_input "
                                placeholder="Nhập số lượng vé">
                            <span class="mt-1 mb-0 error">
                                @if ($errors->has('quantity'))
                                    @foreach ($errors->get('quantity') as $message)
                                        <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                    @endforeach
                                @endif
                            </span>
                        </div>

                    </div>

                    <div class="row mt-3 mb-3">

                        <div class="col-lg-12">
                            <label for="endDate" class="form-label label_altasoftware_add mb-0">Ngày mở bán</label>
                            <input type="date" id="saleDate" name="saleDate" class="form-control button_input ">
                            <span class="mt-1 mb-0 error">
                                @if ($errors->has('saleDate'))
                                    @foreach ($errors->get('saleDate') as $message)
                                        <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-select form-select-lg button_input" aria-label=".form-select-lg example"
                                name="status">
                                <option selected>Trạng Thái</option>
                                <option value="1">Hoạt Động</option>
                                <option value="0">Ngừng Hoạt Động</option>

                            </select>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('status'))
                                @foreach ($errors->get('status') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 text-end">
                            <a href="{{ route('ticket.index') }}" class="btn btn-danger button_pages">Hủy bỏ</a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-success button_pages">Thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
