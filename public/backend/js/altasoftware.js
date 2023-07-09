// 1.1 script cho phần menu

  

// Biến lưu trạng thái "active" mặc định
var activeMenu = '';

// Thiết lập trạng thái "active" cho mục menu
function setActiveMenu(menu) {
    
    // Kiểm tra xem mục menu được chọn có khác mục menu hiện tại đang active hay không
    if (activeMenu !== menu) {
     
        // Xóa lớp 'active' khỏi tất cả các mục menu
        var navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(function(navItem) {
            navItem.classList.remove('active');
        });
        

        // Thêm lớp 'active' cho mục menu được chọn
        var selectedNavItem = document.querySelector('[onclick="setActiveMenu(\'' + menu + '\')"]').parentElement;
        selectedNavItem.classList.add('active');
                // Kiểm tra xem menu con được chọn có thuộc danh sách Cài đặt hệ thống hay không
                var menuItems = document.querySelectorAll('ul#subMenu li.menu_caidatht');
                menuItems.forEach(function(item) {
                    var anchor = item.querySelector('a');
                    if (anchor.getAttribute('onclick') === "setActiveMenu('" + menu + "')") {
                        item.classList.add('active');
                        document.getElementById('caidathethong').classList.add('active_caidathethong');
                    }
                });
        
        // Cập nhật trạng thái "active"
        activeMenu = menu;
     
    }
}

// Lưu trạng thái "active" khi trang được tải lại
window.addEventListener('load', function() {
    // Lấy trạng thái "active" từ localStorage (nếu có)
    var storedMenu = localStorage.getItem('activeMenu');

    // Thiết lập lại trạng thái "active" theo giá trị lưu trữ
    if (storedMenu) {
        setActiveMenu(storedMenu);
    }
});

// Lưu trạng thái "active" khi trang bị đóng
window.addEventListener('beforeunload', function() {
    localStorage.setItem('activeMenu', activeMenu);
});

// Xóa lớp "active" khỏi mục "Dashboard" sau khi trang đã tải xong
document.addEventListener('DOMContentLoaded', function() {
    var dashboardNavItem = document.getElementById('dashboard');
    dashboardNavItem.classList.remove('active');
    
});

//đoạn script phần hiển thị thông báo từ controller
window.addEventListener('DOMContentLoaded', function() {
    var span = document.querySelector('.line-through-span');
    if (span) {
        span.addEventListener('animationend', function() {
            span.parentNode.removeChild(span);
        });
    }
});
           //thực hiện khi nhấn nút bảng roles delete
           function showDeleteConfirmation(departmentId, departmentName) {
            document.getElementById('departmentName').textContent = departmentName;
            document.querySelector('.delete-form').setAttribute('action', '/role/' + departmentId);
        }
        
        function deleteEvent() {
            document.querySelector('.delete-form').submit();
        }
               //thực hiện khi nhấn nút bảng users delete
               function showDeleteConfirmation_user(departmentId, departmentName) {
                document.getElementById('departmentName').textContent = departmentName;
                document.querySelector('.delete-form').setAttribute('action', '/user/' + departmentId);
            }
            
            function deleteEvent_user() {
                document.querySelector('.delete-form').submit();
            }

                         //thực hiện khi nhấn nút có đồng ý xóa bảng type
                         function showDeleteType(departmentId, departmentName) {
                            document.getElementById('departmentName').textContent = departmentName;
                            document.querySelector('.delete-form').setAttribute('action', '/type/' + departmentId);
                        }
                        
                        function deleteType() {
                            document.querySelector('.delete-form').submit();
                        }


        // sự kiện hiển thị hình ảnh avata
       
        // function previewImage(event) {
        //     var input = event.target;
        //     var preview = document.getElementById('preview');
    
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
    
        //         reader.onload = function(e) {
        //             preview.src = e.target.result;
        //             preview.style.display = 'block';
        //         };
    
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
            
        function previewImage(event) {
            var input = event.target;
            var imagePreview = document.getElementById('image-preview');
        
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
        
//ẩn hiển nút đổi mật khẩu ở trang edit user
function togglePasswordForm() {
    var passwordForm = document.getElementById("passwordForm");
    var doimatkhau = document.getElementById("doimatkhau");
    var kdoimk = document.getElementById("kdoimk");

    if (passwordForm.style.display === "none") {
        passwordForm.style.display = "block";
        doimatkhau.style.display = "none";
        kdoimk.style.display = "block";
        localStorage.setItem("passwordFormVisible", "true"); // Lưu trạng thái hiển thị
    } else {
        passwordForm.style.display = "none";
        doimatkhau.style.display = "block";
        kdoimk.style.display = "none";
        localStorage.setItem("passwordFormVisible", "false"); // Lưu trạng thái ẩn
    }
}

function submitPasswordForm() {
    // Sau khi xử lý, đặt lại trạng thái giao diện
    var passwordForm = document.getElementById("passwordForm");
    var doimatkhau = document.getElementById("doimatkhau");
    var kdoimk = document.getElementById("kdoimk");

    if (passwordForm.style.display === "block") {
        passwordForm.style.display = "none";
        doimatkhau.style.display = "block";
        kdoimk.style.display = "none";
        localStorage.setItem("passwordFormVisible", "false"); // Lưu trạng thái ẩn
    } else {
        passwordForm.style.display = "block";
        doimatkhau.style.display = "none";
        kdoimk.style.display = "block";
        localStorage.setItem("passwordFormVisible", "true"); // Lưu trạng thái hiển thị
    }
}

// Kiểm tra và khôi phục trạng thái của passwordForm khi trang được tải lại
window.addEventListener("load", function () {
    var passwordFormVisible = localStorage.getItem("passwordFormVisible");
    var passwordForm = document.getElementById("passwordForm");
    var doimatkhau = document.getElementById("doimatkhau");
    var kdoimk = document.getElementById("kdoimk");

    if (passwordFormVisible === "true") {
        passwordForm.style.display = "block";
        doimatkhau.style.display = "none";
        kdoimk.style.display = "block";
    } else {
        passwordForm.style.display = "none";
        doimatkhau.style.display = "block";
        kdoimk.style.display = "none";
    }
});


// Khởi tạo flatpickr cho trường ngày bắt đầu
flatpickr("#startTime", {
    dateFormat: "d-m-Y", // Định dạng ngày tháng
      // Tùy chỉnh màu sắc
      onReady: function (dateObj, dateStr, instance) {
        var calendarContainer = instance.calendarContainer;
        var days = calendarContainer.getElementsByClassName("day");
        var title = calendarContainer.getElementsByClassName("flatpickr-month");
        
        // Tùy chỉnh màu sắc cho phần tiêu đề
        if (title.length > 0) {
            title[0].style.color = "#ff7506"; // Màu sắc của tiêu đề
        }
        
        // Tùy chỉnh màu sắc cho các ngày
        if (days.length > 0) {
            for (var i = 0; i < days.length; i++) {
                days[i].style.backgroundColor = "#ff7506"; // Màu nền khi chọn ngày
                days[i].style.color = "#fff"; // Màu sắc của ngày
            }
        }
       
    }
});

// Khởi tạo flatpickr cho trường ngày kết thúc
flatpickr("#endTime", {
    dateFormat: "d-m-Y", // Định dạng ngày tháng
    // Các tùy chọn giao diện và màu sắc khác
  
     // Tùy chỉnh màu sắc
     onReady: function (dateObj, dateStr, instance) {
        var calendarContainer = instance.calendarContainer;
        var days = calendarContainer.getElementsByClassName("day");
        var title = calendarContainer.getElementsByClassName("flatpickr-month");
        
        // Tùy chỉnh màu sắc cho phần tiêu đề
        if (title.length > 0) {
            title[0].style.color = "#ff7506"; // Màu sắc của tiêu đề
        }
        
        // Tùy chỉnh màu sắc cho các ngày
        if (days.length > 0) {
            for (var i = 0; i < days.length; i++) {
                days[i].style.backgroundColor = "#ff7506"; // Màu nền khi chọn ngày
                days[i].style.color = "#fff"; // Màu sắc của ngày
            }
        }
       
    }
});






// javascript cho services
// cách 1 : sử dụng định dạng Y-m-d
// // gắn giá trị ngày hiện tại cho input trong service chọn ngày
// var today = new Date(); // Lấy ngày hiện tại
// var startDateInput = document.getElementById("startTime");
// var endDateInput = document.getElementById("endTime");

// // Định dạng ngày tháng
// var formattedDate = today.toISOString().split("T")[0];

// // Gán giá trị ngày hiện tại cho input
// startDateInput.value = formattedDate;
// endDateInput.value = formattedDate;


// cách 2: sử dụng định dạng d-m-Y : cách này cần dùng thư viện  Moment.js link : <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

var today = moment(); // Lấy ngày hiện tại bằng Moment.js
var startDateInput = document.getElementById("startTime");
var endDateInput = document.getElementById("endTime");

// Định dạng ngày tháng
var formattedDate = today.format("D-M-Y");

// Tạo phần tử cha để chứa cả ô input và icon
//chỗ này nó dài để thêm được icon còn nếu bỏ icon thì chỉ cần hai dòng
// startDateInput.value = formattedDate;
// endDateInput.value = formattedDate;
var startDateWrapper = document.createElement('div');
startDateWrapper.classList.add('input-with-icon'); // Thêm lớp CSS cho phần tử cha
startDateInput.parentNode.insertBefore(startDateWrapper, startDateInput); // Chèn phần tử cha trước ô input
startDateWrapper.appendChild(startDateInput); // Di chuyển ô input vào phần tử cha
startDateWrapper.insertAdjacentHTML('beforeend', '<i class="fas fa-calendar-alt input-icon"></i>'); // Thêm icon vào phần tử cha

var endDateWrapper = document.createElement('div');
endDateWrapper.classList.add('input-with-icon');
endDateInput.parentNode.insertBefore(endDateWrapper, endDateInput);
endDateWrapper.appendChild(endDateInput);
endDateWrapper.insertAdjacentHTML('beforeend', '<i class="fas fa-calendar-alt input-icon"></i>');

// Gán giá trị ngày hiện tại cho input
startDateInput.value = formattedDate;
endDateInput.value = formattedDate;



// menu
// JavaScript để mở và đóng menu
function toggleSidebar() {
    const sidebar = document.querySelector('.main-sidebar');
    sidebar.classList.toggle('open');
  }
  
  // JavaScript để đóng menu khi nhấp vào các liên kết trong menu
  const menuLinks = document.querySelectorAll('.nav-link');
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      const sidebar = document.querySelector('.main-sidebar');
      sidebar.classList.remove('open');
    });
  });
  


    



