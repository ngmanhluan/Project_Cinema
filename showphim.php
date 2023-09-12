	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lichchieuphim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style> 
    .xuatphim {
        display: flex;
        border: none;
        margin-bottom: 20px;
        padding: 10px;
    }

    .xuatphim img {
        max-width: 130px;
        height: auto;
        margin-right: 20px;
    }

    .thongtinphim {
        flex-grow: 1;
    }

    .thongtinphim p {
        margin: 0;
        padding: 0;
    }
    .giochieu {
        font-weight: bold;
    }

    .giochieu input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        font-weight: bold;
    }

    .giochieu input[type="submit"]:hover {
        background-color: #0056b3;
    }
          #form{
            display: inline-block;
          }
          #form input {
            background-color: red;
            border: 0px;
            margin: 5px;
            border-radius:4px;
            width: 67px;
            height: 30px;
            color: white; 
            cursor: pointer;         
          }
          /* .nav-tabs li a {
    color: #333; 
  }

 
  .nav-tabs li a:hover {
    color: #007bff; 
  } */
  .gioithieu{
            border: 1px solid red;
            text-align: center;
            margin-bottom: 5px;
          }
</style>
</head>
<body> 
    

<div class="container">
    <div class="gioithieu">
  <h3 class="text-danger">SIO TAM KỲ, QUẢNG NAM</h3>
     <h5>1900 1541 - 0846.272.288</h5>
     <h6>Trung tâm giải trí SIO: Đường Bạch Đằng, Phường Phước Hoà, TP. Tam Kỳ, Quảng Nam (sau siêu thị Coop Mart, siêu thị BigC)</h6>
  </div> 
  <ul class="nav nav-tabs">
  <li class="dropdown">
    <li class=""><a class="p-3 mb-2 bg-danger text-white" href="showphim.php">Thứ 2</a></li>
    </li>
    <li><a href="thu3.php">Thứ 3</a></li>
    <li><a href="thu4.php">Thứ 4</a></li>
    <li><a href="thu5.php">Thứ 5</a></li>
    <li><a href="thu6.php">Thứ 6</a></li>
    <li><a href="#">Thứ 7</a></li>
    <li><a href="#">Chủ Nhật</a></li>
  </ul>
</div>
<!-- 
  <ul class="nav">
   <li class="nav-item">
     <a class="nav-link active" href="#">Active</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
</ul> -->
         <?php  
         	require_once 'database.php';		
           $sql = "SELECT * FROM thu2";
           $result = $conn->query($sql);    
           
           if ($result->num_rows > 0) {
               // Hiển thị dữ liệu lấy từ cơ sở dữ liệu
               while ($row = $result->fetch_assoc()) {
                echo "<div class='xuatphim'>";
                echo "<img src='" . $row["anh"] . "' alt='Ảnh phim'>";
                echo "<div class='thongtinphim'>";
                echo "<p> " . $row["ten_phim"] . "</p>";
                echo " <div class='d-flex'><p class='text-danger'>Đạo diễn: <p> <p>" . $row["dao_dien"] . "</p></div>"; 
                echo " <div class='d-flex' > <p class='text-danger'> Diễn viên:</p> <p>" . $row["dien_vien"] . "</p></div>";
                echo "<p><strong>Mô tả phim:</strong> " . $row["mo_ta_phim"] . "</p>";
                $giochieu_array = explode(", ", $row["gio_chieu"]); 
            foreach ($giochieu_array as $giochieu) {
                $thoi_gian_ket_thuc = strtotime($giochieu);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $thoi_gian_hien_tai = time();
                if ($thoi_gian_hien_tai > $thoi_gian_ket_thuc) {
                    // Thời gian hiện tại đã vượt quá thời gian kết thúc, vô hiệu hóa nút submit và đổi màu
                    echo "<form id='form' action='submit.php' method='post'>";
                    echo "<input type='submit' value='" . $giochieu . "' disabled style='background-color: gray;'>";
                    echo "</form>";
                } else {
                    // Thời gian chiếu còn, hiển thị nút submit
                    echo "<form id='form' action='submit.php' method='post'>";
                    echo "<input type='submit' value='" . $giochieu . "'>";
                    echo "</form>";
                }
            }
            echo "</div>"; // Đóng div 'thongtinphim'
            echo "</div>"; // Đóng div 'xuatphim'
            // echo "<form action='submit.php' method='post'>";
            // echo "<input type='submit' value='" . $row["gio_chieu_new"] . "'>";
            // echo "</form>";
               }
           } else {
               echo "Không có dữ liệu trong cơ sở dữ liệu.";
           }
           
           // Đóng kết nối đến cơ sở dữ liệu
           $conn->close();
   ?>
   
</body>
</html>