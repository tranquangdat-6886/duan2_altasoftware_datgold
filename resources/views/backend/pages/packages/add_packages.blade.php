@extends('backend.layouts.app')
@section('title', 'Events')
@section('main-content')
    <div class=" mt-3 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">Add Packages</h1>
            </div>
            <div class="col-lg-6 text-end">

            </div>
        </div>
        <form action="{{ route('package.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8 text-start">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="name" class="form-label label_altasoftware_add mb-0">Nhập tên gói </label>
                            <input type="text" id="name" name="name" class="form-control button_input "
                                placeholder="Ví dụ: gói gia đinh,...">
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('name'))
                                @foreach ($errors->get('name') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div> 
                    <div class="row mb-4">
                        <div class="col-lg-6 text-end">
                            <a href="{{ route('package.index') }}" class="btn btn-danger button_pages">Hủy bỏ</a>
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
