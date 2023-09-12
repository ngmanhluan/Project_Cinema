<?php
require_once 'database.php';		
$sql = "SELECT * FROM thu2";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="header">
        <nav id="navbar">
            <img src="./footer.img/logo (1).png" class="logo">
            <ul id="menu">
                <li>Trang chủ</li>
                <li>Phim</li>
                <li>Lịch Chiếu</li>
                <li>Ưu Đãi</li>
                <li>Tin Tức</li>
                <li>Giới thiệu</li>
                <li>Liên Hệ</li>
                <li>Thành Viên</li>
                <li>
                    <a href="login.php">
                        Tài Khoản
                    </a>
                </li>
            </ul>
        </nav>
    </div>
   
    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu"); 

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
    </script>
    
</body>
</html>