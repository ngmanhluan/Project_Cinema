<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://png.pngtree.com/png-clipart/20191119/ourlarge/pngtree-cinema-ticket-stubs-png-image_1993580.jpg" type="image/png">   
    <title>admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/footer.css"> 
    <link rel="stylesheet" href="./css/boostrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@400;500;700&display=swap&subet=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.csss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
 </style>
</head>
<body>
<?php require_once 'header.php';	?>	
<?php 
// Set error reporting to display warnings and errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database.php';

if (isset($_POST['addvephim'])) {
    $target_dir = "../"; // Adjust the target directory as needed
    $target_file = $target_dir . basename($_FILES["FileImage"]["name"]);
    $uploadOk = 1;

    $image = basename($_FILES["FileImage"]["name"]);

    if ($image == null || $image == '') {
        $image = $_POST['image'];
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["FileImage"]["tmp_name"]);
        if ($check !== false) {
            // The image is valid
            $uploadOk = 1;
        } else {
            // Handle invalid image
            $image = '';
            echo "<script>alert('Lỗi hình ảnh tải lên');</script>";
            $uploadOk = 0;
        }
    }

    // Upload image
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        // Handle the case where the image upload failed
        echo "<script>alert('Không thể di chuyển tệp!');</script>";
    } else {
        if (move_uploaded_file($_FILES["FileImage"]["tmp_name"], $target_file)) {
            echo "đã tải" . basename($_FILES["FileImage"]["name"]) . "lên thành công.";
        } else {
            echo "<script>alert('Không thể di chuyển tệp!');</script>";
        }
    }

    // Sanitize and get other form data
    $namePhim = mysqli_real_escape_string($conn, $_POST['txtNamephim']);
    $daodien = mysqli_real_escape_string($conn, $_POST['txtdaodien']);
    $dienvien = mysqli_real_escape_string($conn, $_POST['txtdienvien']);
    $mota = mysqli_real_escape_string($conn, $_POST['txtmota']);
    $giochieu = mysqli_real_escape_string($conn, $_POST['txtgiochieu']); // Get the input as a string
    $thu = (int)$_POST['txtThu'];

    $tableName = '';
    switch ($thu) {
        case 2:
            $tableName = 'thu2';
            break;
        case 3:
            $tableName = 'thu3';
            break;
        case 4:
            $tableName = 'thu4';
            break;
        case 5:
            $tableName = 'thu5';
            break;
        case 6:
            $tableName = 'thu6';
            break;
        case 7:
            $tableName = 'thu7';
            break;
        case 8:
            $tableName = 'chunhat';
            break;
        default:
            echo "<script>alert('Lỗi truy vấn!');</script>";
            break;
    }

    if (!empty($tableName)) {
        $sql = "INSERT INTO $tableName (ten_phim, anh, dao_dien, dien_vien, mo_ta_phim, gio_chieu,id) 
        VALUES ('$namePhim', '$image', '$daodien', '$dienvien', '$mota', '$giochieu','$uploadOk')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    }
}
?>
<?php 
if (isset($_GET['notimage'])) {
    $noimage = 'Vui lòng chọn hình ảnh hợp lệ!';
} else {
    $noimage = '';
}
?>
  <!-- end them phim -->


<div class="container">
    <form id="form2" method="post" enctype="multipart/form-data">
        <div class="tenphim" >
            <label>  Tên Phim </label>
            <input type="text"  name="txtNamephim" placeholder="Nhập tên phim" required/>
        </div>
        <div  class="daodien" >
            <label> Đạo Diễn  </label>
            <input type="text" name="txtdaodien" placeholder="Nhập tên đạo diễn" required/>
        </div>

        <div  class="dienvien">
            <label>  Diễn Viên </label>
            <input type="text"  name="txtdienvien" placeholder="Nhập tên diễn viên" required/>
        </div>

        <div class="mota" >
            <label > Mô Tả  </label>
            <textarea  name="txtmota" placeholder="Mô tả phim" required></textarea>
        </div>
        
        <div class="form-image">
            <label> Chọn hình ảnh </label>
            <input type="file" name="FileImage" required>
            <span style="color: red"><?php echo $noimage; ?></span>
        </div>
        <div class="giochieu" >
            <label> Giờ Chiếu </label>
            <textarea  name="txtgiochieu" placeholder="Giờ chiếu phim" required></textarea>
        </div>

        <div class="thu">
            <select  name="txtThu">
                <option value="0">Bạn hãy chọn thứ để tìm kiếm</option>
                <option value="2">Thứ 2</option>
                <option value="3">Thứ 3</option>
                <option value="4">Thứ 4</option>
                <option value="5">Thứ 5</option>
                <option value="6">Thứ 6</option>
                <option value="7">Thứ 7</option>
                <option value="8">Chủ Nhật</option>
            </select>   
        </div>
        <div class="them"> 
            <button type="submit" name="addvephim"> Thêm Phim </button>
        </div>
        </form>
              <!-- end form2 -->
              <div>
            
              <!-- end form sua  -->
              <form id="form3" method="post">
              <div class="xoa" >
            <label>  Xóa phim  </label>
            <input type="number"  name="delete_id" placeholder="Nhập id ..." required/>
            <div class="thu1">
            <select  name="txtThu2">
                <option value="0">Bạn hãy chọn thứ để tìm kiếm</option>
                <option value="2">Thứ 2</option>
                <option value="3">Thứ 3</option>
                <option value="4">Thứ 4</option>
                <option value="5">Thứ 5</option>
                <option value="6">Thứ 6</option>
                <option value="7">Thứ 7</option>
                <option value="8">Chủ Nhật</option>
            </select> 
     </div>  
                <div class="submit1">            
              <input type="submit" name="delete" value="Xóa">
                </div>
              </div>
              </form>
        <form id="form1" method="post">
        <div class="timkiem" >
                <label>  Tìm kiếm </label>
                <input type="text"  name="txtsearch" placeholder="Tìm kiếm ..." required/>
                <div class="thu1">
                <select  name="txtThu1">
                    <option value="0">Bạn hãy chọn thứ để tìm kiếm</option>
                    <option value="2">Thứ 2</option>
                    <option value="3">Thứ 3</option>
                    <option value="4">Thứ 4</option>
                    <option value="5">Thứ 5</option>
                    <option value="6">Thứ 6</option>
                    <option value="7">Thứ 7</option>
                    <option value="8">Chủ Nhật</option>
                </select> 
        </div>  
            <div class="submit">            
                <input type="submit" name="search" value="Search">
            </div>
    </div>
            <div class="xuattimkiem">
            <?php
            error_reporting(E_ALL);
                $tableName = '';
            if(isset($_POST["search"])){
                $timkiem = $_POST["txtsearch"];
                $thu = (int)$_POST['txtThu1'];
            switch ($thu) {
                case 2:
                    $tableName = 'thu2';
                    break;
                case 3:
                    $tableName = 'thu3';
                    break;
                case 4:
                    $tableName = 'thu4';
                    break;
                case 5:
                    $tableName = 'thu5';
                    break; 
                case 6:
                    $tableName = 'thu6';
                    break;
                case 7:
                    $tableName = 'thu7';
                    break;
                case 8:
                    $tableName = 'chunhat';
                    break;
                default:
                    echo "<script>alert('Lỗi truy vấn!');</script>";
                    break;
            } 
                if($timkiem =="") {
                    echo "<script>alert('vui lòng nhập!');</script>";
                } 
                if (!empty($tableName)){
                    $sql= " SELECT * FROM $tableName WHERE ten_phim LIKE '%$timkiem%'";
                    $qr = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($qr);
                    if($count <= 0) {
                        echo "<script>alert('không tìm thấy từ nào với từ khóa,.$timkiem!')</script>";
                    }
                    else {
                        while ($row = mysqli_fetch_assoc($qr)) {
                            echo "<div class='xuatphim'>";
                            echo "<img src='" . $row["anh"] . "' alt='Ảnh phim'>";
                            echo "<div class='thongtinphim'>";
                            echo "<p> " . $row["ten_phim"] . "</p>";
                            echo "<div class='d-flex'><p class='text-danger'>Đạo diễn: <p> <p>" . $row["dao_dien"] . "</p></div>";
                            echo "<div class='d-flex' > <p class='text-danger'> Diễn viên:</p> <p>" . $row["dien_vien"] . "</p></div>";
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
                            
                            echo "</div>";
                            echo "<form id='edit_form' action='sua.php' method='post'>";
                            echo "<input type='hidden' name='edit_id' value='" . $row["id"] ."'>";
                            echo "<input type='hidden'  name='thu' value='".   $thu."'>";
                            echo "<input type='submit' name='edit' value='Sửa phim'>";
                            echo "<input type='submit' style='width=20px;height:30px;' value='id= " . $row["id"] . "'>";
                            echo "</form>";
                                // echo "<form id='delete_form' method='post'>";
                                // echo "<input type='hidden' name='delete_id' value='" . $row["id"] . "'>";
                                // echo "<input type='submit' name='delete' value='Xóa'>";
                                // echo "</form>"; // Đóng div 'thongtinphim'
                            echo "</div>"; // Đóng div 'xuatphim'
                        }
                    }
                }
            }
        ?> 
        </div>
<!-- end tìm kiếm  -->
<?php
$tableName2 = '';

if (isset($_POST["delete"])) {
    $thu2 = (int)$_POST['txtThu2']; // Initialize $thu2 here
    
    switch ($thu2) {
        case 2:
            $tableName2 = 'thu2';
            break;
        case 3:
            $tableName2 = 'thu3';
            break;
        case 4:
            $tableName2 = 'thu4';
            break;
        case 5:
            $tableName2 = 'thu5';
            break;
        case 6:
            $tableName2 = 'thu6';
            break;
        case 7:
            $tableName2 = 'thu7';
            break;
        case 8:
            $tableName2 = 'chunhat';
            break;
        default:
            echo "<script>alert('Lỗi truy vấn!');</script>";
            break;
    }

    $delete_id = $_POST["delete_id"];
    
    if (!empty($tableName2)) {
        // Kiểm tra xem biến $tableName có giá trị không
        $sql = "DELETE FROM $tableName2 WHERE id = $delete_id";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Xóa thành công!');</script>";
        } else {
            echo "<script>alert('Lỗi khi xóa: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>
 <!-- end xoa  -->
</div>
<div class="footer"></div>
</body>
</html>

<!-- basename(): Đây là một hàm PHP dùng để trích xuất phần tên tệp từ đường dẫn hoặc chuỗi. -->
 <!-- Trong trường hợp này, basename() được sử dụng để lấy phần tên tệp hình ảnh từ đường dẫn tệp tải lên.
 Ví dụ, nếu tệp hình ảnh có đường dẫn là "uploads/image.jpg", thì basename() sẽ trả về "image.jpg". -->
 