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
    <link rel="stylesheet" href="./css/footer.css"> 
    <link rel="stylesheet" href="./css/boostrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@400;500;700&display=swap&subet=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.csss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <footer class="main-footer">
        <div class="pattern-layer-one" style="background-image: url(/footer.img/pattern-12.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(/footer.img/pattern-13.png)"></div>
        <div class="auto-container">
            <div class="widgets-section">
                <div class="logo">
                    <a href="/"><img src="/footer.img/logo (1).png" alt="riocinemas" /></a>
                </div>
                <div class="footer-contact">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h3>HỆ THỐNG RẠP</h3>
                        <ul>
                                    <li>
                                        >> RIO TAM KỲ, QUẢNG NAM
                                    </li>
                                    <li>
                                        >> RIO BA ĐỒN , QUẢNG BÌNH
                                    </li>
                                    <li>
                                        >> RIO LIÊN CHIỂU, ĐÀ NẴNG
                                    </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h3>THÔNG TIN</h3>
                        <ul>
                            <li>
                                >> Giới Thiệu
                            </li>
                            <li>
    
                                >> Liên Hệ
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h3>HÌNH THỨC THANH TOÁN</h3>
                        <div class="col-lg-12" style="display:flex">
                            <div class="col-lg-4 col-md-6 col-sm-12" >
                                <img src="/footer.img/atm.png" alt="atm" style="max-width: 30%;" />
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12" >
                                <img src="/footer.img/vnpay.png" alt="vnpay" style="max-width: 30%;" />
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <img src="/footer.img/master-card.svg" alt="master-card" style="max-width: 30%;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h3>Hotline</h3>
                        <ul>
                            <li>
                                <a href="tel:+(84) 846.272.288"><span class="icon flaticon-maps-and-flags"></span>Call: +(84) 846.272.288</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
               <!-- ocial Box -->
            <ul class="social-box">
                <li><a href="https://www.facebook.com" target="_blank" class="fa fa-facebook-f"></a></li>
                <li><a href="http://www.riocinemas.vn/" target="_blank" class="fa fa-dribbble"></a></li>
                <li><a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a></li>
            </ul>
        </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">&copy; 2022 Rio Cinemas. All Rights Reserved. Designed By <a href="https://kingpro.vn">KingPro</a></div>
            </div>
        </div>
    </footer> 
    
</body>
</html>