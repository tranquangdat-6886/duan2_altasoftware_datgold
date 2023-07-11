@extends('frontend.layouts.apps')
@section('title', 'Trang chủ')
@section('main-content')
    <section class="pt-5 khung">
        {{-- <div class="ball"></div> --}}

        <div class="container">
            <div class="row ">

                <div class="col-lg-6" style="z-index: 9;">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-end pt-4 ">
                            <img src="{{ asset('frontend/assets/images/logo_damsen.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 ">
                            {{-- <span id="title_logo">ĐẦM SEN PARK</span> --}}
                            <h1 id="title_logo">ĐẦM SEN PARK</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  text-end p-0" style="z-index: 9;">
                    <img src="{{ asset('frontend/assets/images/icon2.png') }}" alt="" class="img-fluid icon2">
                </div>
            </div>
            {{-- <div class="ball"></div>
            <div class="ball"></div> --}}
            <div class="row position-relative">
                <div class="col-12 khunnennhap">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/assets/images/nenhome.png') }}" alt="" class="img-fluid">
                        <div class="position-absolute translate-middle absolute-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                                volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                            </p>
                            <p>
                                Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus,
                                lobortis molestie lectus consequat a.
                            </p>
                        </div>
                        <div class="position-absolute translate-middle absolute-text2">
                            <p>
                                <img src="{{ asset('frontend/assets/images/ngoisao.png') }}" alt=""
                                    class="img-fluid ngoisao">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <img src="{{ asset('frontend/assets/images/ngoisao.png') }}" alt=""
                                    class="img-fluid ngoisao">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <img src="{{ asset('frontend/assets/images/ngoisao.png') }}" alt=""
                                    class="img-fluid ngoisao">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p>
                                <img src="{{ asset('frontend/assets/images/ngoisao.png') }}" alt=""
                                    class="img-fluid ngoisao">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                        <div class="position-absolute translate-middle absolute-text3">
                            <img src="{{ asset('frontend/assets/images/icon_1.png') }}" alt=""
                                class="img-fluid anhnguoi1">
                        </div>
                        <div class="position-absolute translate-middle absolute-text4">
                            <img src="{{ asset('frontend/assets/images/vecuaban.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="position-absolute translate-middle absolute-text5">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <select class="form-select mb-3 chongoi" aria-label=".form-select-lg example"
                                                id="mySelect" name="package">
                                                <option selected>Chọn gói</option>
                                                <option value="1">Gói gia đình</option>
                                            </select>
                                            <img src="{{ asset('frontend/assets/images/nutselect.png') }}" alt=""
                                                class="img-fluid select-image" id="selectButton">
                                        </div>
                                    </div>

                                </div>
                                <div class="row hanghaichonngay">
                                    <div class="col-lg-3">
                                        <div class="position-relative">
                                            <input type="text" class=" form-control soluongve" name="quantiti"
                                                id="" placeholder="Số lượng vé">

                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="position-relative">
                                            <input type="text" class=" form-control ngaysudung" name="ticketDate"
                                                id="" placeholder="Ngày sử dụng">
                                            <img src="{{ asset('frontend/assets/images/chonngay.png') }}" alt=""
                                                class="img-fluid select-image" id="chonngay">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <input type="text" class=" form-control thongtin" name="name"
                                                id="" placeholder="Họ và tên">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <input type="text" class=" form-control thongtin" name="phoneNumber"
                                                id="" placeholder="Số điện thoại ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <input type="text" class=" form-control thongtin" name="email"
                                                id="" placeholder="Địa chỉ email ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                           <button type="submit" class="btn bg-transparent border-0">
                                            <img src="{{ asset('frontend/assets/images/datve.png') }}" alt=""
                                            class="img-fluid datve" id="datve">
                                           </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script type='text/javascript'>
                var pictures = [{
                        src: "{{ asset('frontend/assets/images/globe1.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe2.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe2.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe1.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe6.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe3.png') }}",
                        width: 140,
                        height: 210
                    },
                    {
                        src: "{{ asset('frontend/assets/images/globe5.png') }}",
                        width: 140,
                        height: 210
                    },


                    // Thêm các hình ảnh khác vào đây
                ];

                var numFlakes = pictures.length; // Số lượng hình ảnh
                var downSpeed = 0.001; // Tốc độ rơi của hình ảnh
                var lrFlakes = 10; // Tốc độ hình ảnh giao động từ bên trái sang bên phải và ngược lại

                var xcoords = [];
                var ycoords = [];
                var flakes = [];

                // Khởi tạo hình ảnh và tọa độ ban đầu
                for (var x = 0; x < numFlakes; x++) {
                    var picture = pictures[x];
                    var flake = {
                        x: (x + 1) / (numFlakes + 1),
                        y: x / numFlakes,
                        picture: picture,
                        element: null
                    };
                    flakes.push(flake);
                }

                // Vẽ các hình ảnh
                for (var x = 0; x < numFlakes; x++) {
                    var flake = flakes[x];
                    var picture = flake.picture;
                    if (document.layers) {
                        document.write('<layer id="snFlkDiv' + x + '"><img src="' + picture.src + '" height="' + picture.height +
                            '" width="' + picture.width + '" alt="*" border="0"></layer>');
                    } else {
                        document.write('<div style="position:absolute; z-index:8;" id="snFlkDiv' + x + '"><img src="' + picture
                            .src + '" height="' + picture.height + '" width="' + picture.width + '" alt="*" border="0"></div>');
                    }
                    flake.element = document.getElementById('snFlkDiv' + x);
                }

                // Cập nhật vị trí của các hình ảnh
                function updateFlakesPosition() {
                    var scrWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                    var scrHeight =
                        700; //window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                    var scrollWidth = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;
                    var scrollHeight = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

                    for (var x = 0; x < numFlakes; x++) {
                        var flake = flakes[x];
                        var divRef = flake.element.style;
                        var oPix = document.childNodes ? 'px' : 0;

                        if (flake.y * scrHeight > scrHeight - flake.picture.height) {
                            flake.y = 0;
                        }

                        var left = Math.round(((flake.x * scrWidth) - (flake.picture.width / 2)) + ((scrWidth / ((numFlakes + 1) *
                            4)) * (Math.sin(lrFlakes * flake.y) - Math.sin(3 * lrFlakes * flake.y)))) + scrollWidth;
                        var top = Math.round(flake.y * scrHeight) + scrollHeight;

                        divRef.left = left + oPix;
                        divRef.top = top + oPix;

                        flake.y += downSpeed;
                    }
                }

                // Hàm thực hiện cập nhật vị trí và gọi lại sau mỗi khoảng thời gian
                function flakeFall() {
                    updateFlakesPosition();
                    window.requestAnimationFrame(flakeFall);
                }

                flakeFall();
            </script>

        </div>
    </section>
@endsection
