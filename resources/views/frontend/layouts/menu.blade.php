<div class="row">
    <div class="col-lg-12  ">
        <div class=" row align-items-center">
            <img src="{{ asset('frontend/assets/images/background_header.png') }}" alt=""
                class="img-fluid nenmenu">
            <div class="position-absolute  row align-items-center">
                <div class="col-lg-3 text-end pb-3 ">
                    <a href="{{ route('home') }}">
                        @if (isset($settings))
                            <img src="{{ asset($settings->logo1) }}" class="img-fluid" alt="">
                        @endif
                    </a>

                </div>
                <div class="col-lg-6 text-center menu ps-5 pe-0">
                    <ul class="nav text-center">
                        <li class="nav-item me-5 ms-5" id="menuHome">
                            <a href="/" class="nav-link">Trang chủ</a>
                        </li>
                        <li class="nav-item me-5" id="menuEvent">
                            <a href="/event" class="nav-link">Sự kiện</a>
                        </li>
                        <li class="nav-item me-5" id="menuContact">
                            <a href="/contact" class="nav-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <script>
                    // Lấy các phần tử menu
                    const menuHome = document.getElementById('menuHome');
                    const menuEvent = document.getElementById('menuEvent');
                    const menuContact = document.getElementById('menuContact');

                    // Kiểm tra xem có dữ liệu trong localStorage không
                    const activeMenuItem = localStorage.getItem('activeMenuItem');
                    if (activeMenuItem === null) {
                        // Nếu không có dữ liệu trong localStorage, mặc định active là Trang chủ
                        menuHome.classList.add('active');
                        localStorage.setItem('activeMenuItem', 'menuHome');
                    } else {
                        // Xóa class "active" khỏi tất cả các phần tử menu
                        menuHome.classList.remove('active');
                        menuEvent.classList.remove('active');
                        menuContact.classList.remove('active');

                        // Thêm class "active" vào phần tử menu tương ứng
                        const selectedMenu = document.getElementById(activeMenuItem);
                        if (selectedMenu) {
                            selectedMenu.classList.add('active');
                        }
                    }

                    // Gán sự kiện click cho các phần tử menu
                    menuHome.addEventListener('click', function() {
                        setActiveMenuItem('menuHome');
                    });

                    menuEvent.addEventListener('click', function() {
                        setActiveMenuItem('menuEvent');
                    });

                    menuContact.addEventListener('click', function() {
                        setActiveMenuItem('menuContact');
                    });

                    // Hàm cài đặt menu được chọn và lưu vào localStorage
                    function setActiveMenuItem(menuId) {
                        // Xóa class "active" khỏi tất cả các phần tử menu
                        menuHome.classList.remove('active');
                        menuEvent.classList.remove('active');
                        menuContact.classList.remove('active');

                        // Thêm class "active" vào phần tử menu được chọn
                        const selectedMenu = document.getElementById(menuId);
                        if (selectedMenu) {
                            selectedMenu.classList.add('active');
                            localStorage.setItem('activeMenuItem', menuId);
                        }
                    }
                </script>





                <div class=" col-lg-3 text-start  ">
                    <span class="sdt">
                        <img src="{{ asset('frontend/assets/images/sdt.png') }}" alt="" class="img-fluid">
                        @if (isset($settings))
                            {{ $settings->phoneNumber }}
                        @endif
                    </span>
                </div>
            </div>


        </div>
    </div>
</div>
