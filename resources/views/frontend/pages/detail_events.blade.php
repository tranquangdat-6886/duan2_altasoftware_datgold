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
                    <h1 class="sukiennoibat">Sự Kiện 1</h1>
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
                                    <img src="{{ asset('frontend/assets/images/detail_01.png') }}" alt=""
                                        class="img-fluid anhdetail1">
                                </div>
                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">
                                    <p class="ngaydetail"><span><img
                                                src="{{ asset('frontend/assets/images/calendar.png') }}" alt=""
                                                class="img-fluid"></span>30/05/2023 - 17/07/2023</p>
                                    <p class="title_card_col-1">
                                        Đầm sen Park
                                    </p>
                                    <p class="gia_detail ">25.000 VND</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute1">

                        <div class=" ">
                            <p id="khoi_textdetail1">
                                <span class="text_detail1">
                                    Lorem Ipsum
                                </span> chỉ đơn giản là văn bản giả của ngành công nghiệp in ấn và sắp chữ. Lorem
                                Ipsum là văn bản giả tiêu chuẩn của ngành từ những năm 1500, khi một nhà in không xác
                                định lấy một bộ sưu tập các loại và xáo trộn nó để tạo thành một cuốn sách mẫu. Nó đã
                                tồn tại không chỉ năm thế kỷ mà còn là bước nhảy vọt sang sắp chữ sdsd điện tử, cssa về
                                cơ bản không thay đổi. Nó được phổ biến vào những năm 1960 với việc phát hành các tờ
                                Letraset chứa các đoạn Lorem Ipsum của Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute2">
                        <div class=" ms-5">
                            <div class="card p-0 bg-transparent border-0 khoi_textdetail2">
                                <div class="card-header bg-transparent border-0 p-0">
                                    <img src="{{ asset('frontend/assets/images/detail_02.png') }}" alt=""
                                        class="img-fluid anhdetail2">
                                </div>
                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">
                                    <p id="text_detail2">
                                        Lorem Ipsum không đơn giản là văn bản ngẫu nhiên. Nó bắt nguồn từ một tác phẩm
                                        văn học Latinh cổ điển từ năm 45 trước Công nguyên, tức là nó đã hơn 2000 năm
                                        tuổi. các từ, consectetur, từ một đoạn văn Lorem Ipsum, và xem qua các trích dẫn
                                        của từ này trong văn học cổ điển,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute translate-middle detail_absolute3">
                        <div class=" ms-5">
                            <div class="card p-0 bg-transparent border-0 khoi_textdetail2">

                                <div class="card-body p-0 bg-transparent  border-0 pt-3 ps-0">
                                    <p id="text_detail2" class="mb-3">
                                        Lorem Ipsum không đơn giản là văn bản ngẫu nhiên. Nó bắt nguồn từ một tác phẩm
                                        văn học Latinh cổ điển từ năm 45 trước Công nguyên, tức là nó đã hơn 2000 năm
                                        tuổi. các từ, consectetur, từ một đoạn văn Lorem Ipsum, và xem qua các trích dẫn
                                        của từ này trong văn học cổ điển,
                                    </p>
                                    <img src="{{ asset('frontend/assets/images/detail_02.png') }}" alt=""
                                        class="img-fluid anhdetail2">
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
