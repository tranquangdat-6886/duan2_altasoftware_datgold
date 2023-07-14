@extends('backend.layouts.app')
@section('title', 'Settings')
@section('main-content')
    <div class=" mt-3 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">Settings</h1>
            </div>
            <div class="col-lg-6 text-end">

            </div>
        </div>
        <form action="{{ route('setting', ['ID_SET' => 1]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8 text-start">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="email" class="form-label label_altasoftware_add mb-0">Email </label>
                            <input type="text" id="email" name="email" class="form-control button_input "
                                placeholder="Nhập Email">
                            @if (isset($settings))
                                <input type="text" id="email" name="email"
                                    class="form-control button_input ms-5 w-75 mt-2" value="{{ $settings->email }}"
                                    disabled>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="address" class="form-label label_altasoftware_add mb-0">Địa Chỉ </label>
                            <input type="text" id="address" name="address" class="form-control button_input "
                                placeholder="Nhập Địa chỉ">
                            @if (isset($settings))
                                <input type="text" id="address" name="address"
                                    class="form-control button_input ms-5 w-75 mt-2" value="{{ $settings->address }}"
                                    disabled>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="phoneNumber" class="form-label label_altasoftware_add mb-0">Số điện thoại </label>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control button_input "
                                placeholder="Nhập SDT">
                            @if (isset($settings))
                                <input type="text" id="phoneNumber" name="phoneNumber"
                                    class="form-control button_input ms-5 w-75 mt-2" value="{{ $settings->phoneNumber }}"
                                    disabled>
                            @endif
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="passdn" class="form-label label_altasoftware_add">Logo header (kích
                                            thước :
                                            229 X 91px)</label>
                                        <div class="upload-container1">
                                            <input type="file" class="form-control" id="logo1" name="logo1"
                                                onchange="previewImage(event, 'image-preview1')" style="z-index: 99999;">
                                            <div class="upload-overlay" id="image-preview1" style="z-index: 9999;">
                                                <i class="fas fa-camera"></i>
                                                <span>Chọn ảnh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if (isset($settings))
                                        <img src="{{ asset($settings->logo1) }}" alt="">
                                    @endif
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="passdn" class="form-label label_altasoftware_add">Logo Home (kích
                                            thước : 181
                                            X 145px)</label>
                                        <div class="upload-container2">
                                            <input type="file" class="form-control" id="logo2" name="logo2"
                                                onchange="previewImage(event, 'image-preview2')" style="z-index: 99999;">
                                            <div class="upload-overlay" id="image-preview2" style="z-index: 9999;">
                                                <i class="fas fa-camera"></i>
                                                <span>Chọn ảnh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="form-label"></label>
                                    @if (isset($settings))
                                        <img src="{{ asset($settings->logo2) }}" alt="">
                                    @endif
                                </div>
                            </div>


                        </div>

                    </div>
                    <script>
                        function previewImage(event, previewId) {
                            var input = event.target;
                            var imagePreview = document.getElementById(previewId);

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    imagePreview.style.backgroundImage = "url('" + e.target.result + "')";
                                    imagePreview.style.backgroundSize = "cover";
                                    imagePreview.innerHTML = "";
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>


                    <div class="row mb-4">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6 ">
                            <button type="submit" class="btn  button_pages" style="background-color: #ffb523;">Lưu
                                lại</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
