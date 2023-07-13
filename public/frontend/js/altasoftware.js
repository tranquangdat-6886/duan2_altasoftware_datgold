// 1.1 js quả cầu rơi 
document.addEventListener("DOMContentLoaded", function(event) {
    var balls = document.querySelectorAll(".ball");

    var ballImages = [
        "frontend/assets/images/globe1.png",
        "frontend/assets/images/globe2.png",
        "frontend/assets/images/globe3.png",        
        "frontend/assets/images/globe5.png",        
    ];

    var index = 0;
    var interval;

    function dropBall() {
        if (index >= balls.length) {
            index = 0; // Đặt lại chỉ số về 0 khi đã rơi hết tất cả các quả cầu
        }

        var ball = balls[index];
        var randomX = Math.random() * 90; // Vị trí ngẫu nhiên theo trục X
        var randomY = Math.random() * 90; // Vị trí ngẫu nhiên theo trục Y
        var randomImage = ballImages[Math.floor(Math.random() * ballImages.length)]; // Hình ảnh ngẫu nhiên

        ball.style.left = randomX + "%";
        ball.style.top = randomY + "%";
        ball.style.backgroundImage = "url(" + randomImage + ")";
        ball.addEventListener("transitionend", function() {
            ball.parentNode.removeChild(ball);
        });

        index++;

        interval = setTimeout(dropBall, 5000); // Thời gian trễ (5000ms cho mỗi quả cầu)
    }

    dropBall(); // Bắt đầu quá trình rơi

    // Khi muốn dừng quá trình rơi, bạn có thể gọi clearInterval(interval);

});
