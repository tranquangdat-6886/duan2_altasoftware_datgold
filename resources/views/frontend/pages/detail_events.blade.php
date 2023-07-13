@extends('frontend.layouts.apps')
@section('title', 'Chi tiết sự kiện')
@section('main-content')
    <section class="pt-5 khung">
        <div class="container-fluid" style="z-index: 10;">
            <div class="row mt-4 mb-3 " style="z-index: 10;">

                <div class="col-lg-3 text-start " style="z-index: 10;">
                    <img src="{{ asset('frontend/assets/images/cophai.png') }}" alt="" class="img-fluid cotrai">
                </div>
                <div class="col-lg-6 text-center " style="z-index: 10;">
                    <h1 class="sukiennoibat">{{ $event->name }}</h1>
                </div>
                <div class="col-lg-3 text-end " style="z-index: 10;">
                    <img src="{{ asset('frontend/assets/images/cotrai.png') }}" alt="" class="img-fluid cophai">
                </div>

            </div>
        </div>
        <div class="container-fluid" style="z-index: 11;">

            <div class="row  align-items-center  position-relative" style="z-index: 11;">
                <div class="col-lg-12  text-center">
                    <img src="{{ asset('frontend/assets/images/khungsukien.png') }}" alt=""
                        class="img-fluid khungdetait">
                    <div class="position-absolute translate-middle detail_absolute">
                        <div class="row">
                            <div class="card p-0 bg-transparent border-0">
                                <div class="card-header bg-transparent border-0 p-0">
                                    <img src="{{ asset($event->avatar) }}" alt="" class="img-fluid anhdetail1">
                                </div>
                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">
                                    <p class="ngaydetail"><span><img
                                                src="{{ asset('frontend/assets/images/calendar.png') }}" alt=""
                                                class="img-fluid"></span>{{ date('d/m/Y', strtotime($event->startDate)) }}
                                        - {{ date('d/m/Y', strtotime($event->endDate)) }}</p>
                                    <p class="title_card_col-1">
                                        Đầm sen Park
                                    </p>
                                    @if (isset($ticket->price))
                                        <p class="gia_detail ">{{ number_format($ticket->price, 0, ',', '.') }} VND</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute1">

                        <p id="khoi_textdetail1">
                            {!! strip_tags(str_replace('&nbsp;', ' ', trim($event->description1)), '<img>') !!}
                        </p>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute2">
                        <div class=" ms-5">
                            <div class="card p-0 bg-transparent border-0 khoi_textdetail2">
                                <div class="card-header bg-transparent border-0 p-0">

                                </div>
                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">
                                    <p id="text_detail2">

                                        {!! strip_tags(str_replace('&nbsp;', ' ', trim($event->description2)), '<img>') !!}


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute3">
                        <div class=" ms-5">
                            <div class="card p-0 bg-transparent border-0 khoi_textdetail2">

                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">

                                    <p id="text_detail3" class="mb-3">
                                        {!! strip_tags(str_replace('&nbsp;', ' ', trim($event->description3)), '<img>') !!}
                                    </p>

                                </div>



                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


        <script type='text/javascript'>
            var pictures = [{
                    src: "{{ asset('frontend/assets/images/red.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/blue_01.png') }}",
                    width: 12,
                    height: 15
                },
                {
                    src: "{{ asset('frontend/assets/images/blue_02.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/blue_03.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/blue_04.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/blue_05.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/green_01.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/green_02.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/green_03.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/green_04.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/green.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/red_01.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/red_02.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/red_04.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/red_04.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/gold_01.png') }}",
                    width: 12,
                    height: 16
                },
                {
                    src: "{{ asset('frontend/assets/images/gold_02.png') }}",
                    width: 20,
                    height: 20
                },
                {
                    src: "{{ asset('frontend/assets/images/gold_03.png') }}",
                    width: 12,
                    height: 16
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
                    document.write('<div style="position:absolute; z-index:9;" id="snFlkDiv' + x + '"><img src="' + picture
                        .src + '" height="' + picture.height + '" width="' + picture.width + '" alt="*" border="0"></div>');
                }
                flake.element = document.getElementById('snFlkDiv' + x);
            }

            // Cập nhật vị trí của các hình ảnh
            function updateFlakesPosition() {
                var scrWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var scrHeight =
                    500; //window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
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
    </section>
@endsection
