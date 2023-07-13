@extends('frontend.layouts.apps')
@section('title', 'Sự kiện')
@section('main-content')
    <section class="pt-5 khung">
        <div class="container-fluid" style="z-index: 10;">
            <div class="row mt-4 mb-3 " style="z-index: 10;">

                <div class="col-lg-3 text-start " style="z-index: 10;">
                    <img src="{{ asset('frontend/assets/images/cophai.png') }}" alt="" class="img-fluid cotrai">
                </div>
                <div class="col-lg-6 text-center " style="z-index: 10;">
                    <h1 class="sukiennoibat">Sự Kiện Nổi Bật</h1>
                </div>
                <div class="col-lg-3 text-end " style="z-index: 10;">
                    <img src="{{ asset('frontend/assets/images/cotrai.png') }}" alt="" class="img-fluid cophai">
                </div>

            </div>
        </div>
        <div class="container">

            <div class="row position-relative align-items-center">
                <div class="col-lg-1 text-end" style="z-index: 11;">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/previous.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="row ">
                        @foreach ($events as $event)
                            <div class="col-lg-3 sukien_khung">
                                <div class="card ">
                                    <div class="card-header p-0 bg-transparent">
                                        <img src="{{ asset($event->avatar) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h1 class="mb-0 sukien">{{ $event->name }}</h1>
                                        <p class="mt-0 sukien_mota">{{ $event->title }}</p>
                                        <p class="sukien_date "><span><img
                                                    src="{{ asset('frontend/assets/images/calendar.png') }}" alt=""
                                                    class="img-fluid"></span>{{ date('d/m/Y', strtotime($event->startDate)) }}
                                            - {{ date('d/m/Y', strtotime($event->endDate)) }}</p>
                                        <p class="gia mb-0">
                                            @foreach ($event->ticket as $ticket)
                                                {{ number_format($ticket->price, 0, ',', '.') }} VND
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0 mt-0">
                                        <a href="/detail">
                                            <img src="{{ asset('frontend/assets/images/xemchitiet.png') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-1" style="z-index: 11;">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/next.png') }}" class="img-fluid" alt="">
                    </a>
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
