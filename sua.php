<?php
require_once 'database.php';

// Khai báo biến và khởi tạo giá trị mặc định
$edit_id = "";
$namePhim = "";
$daodien = "";
$dienvien = "";
$mota = "";
$giochieu = "";

if (isset($_POST["edit"])) {
    $edit_id = $_POST["edit_id"];
    
    // Truy vấn cơ sở dữ liệu để lấy thông tin của phim cần sửa
    $sql = "SELECT * FROM txtThu1 WHERE id = $edit_id";
    $result = mysqli_query($conn, $sql);
    
    if ($result === false) {
        echo "<p>Lỗi truy vấn SQL: " . mysqli_error($conn) . "</p>";
    } else if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Lấy thông tin từ cơ sở dữ liệu để điền vào các ô input
        $namePhim = $row["ten_phim"];
        $daodien = $row["dao_dien"];
        $dienvien = $row["dien_vien"];
        $mota = $row["mo_ta_phim"];
        $giochieu = $row["gio_chieu"];
    } else {
        echo "<p>Không tìm thấy phim để sửa.</p>";
    }
}

// Xử lý cập nhật thông tin phim khi nhấp vào nút "Cập nhật"
if (isset($_POST["update_phim"])) {
    $edit_id = $_POST["edit_id"];
    $namePhim = mysqli_real_escape_string($conn, $_POST['txtNamephim']);
    $daodien = mysqli_real_escape_string($conn, $_POST['txtdaodien']);
    $dienvien = mysqli_real_escape_string($conn, $_POST['txtdienvien']);
    $mota = mysqli_real_escape_string($conn, $_POST['txtmota']);
    $giochieu = mysqli_real_escape_string($conn, $_POST['txtgiochieu']);

    // Lấy và cập nhật thông tin của phim dựa trên dữ liệu biểu mẫu gửi đi
    $sql_update = "UPDATE txtThu1 SET 
        ten_phim = '$namePhim',
        dao_dien = '$daodien',
        dien_vien = '$dienvien',
        mo_ta_phim = '$mota',
        gio_chieu = '$giochieu'
        WHERE id = $edit_id";
    $result_update = mysqli_query($conn, $sql_update);
    if ($result_update === false) {
        echo "<p>Lỗi khi cập nhật thông tin phim: " . mysqli_error($conn) . "</p>";
    } else {
        echo "<p>Cập nhật thông tin phim thành công.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body>
<form id='edit_phim_form' method='post' enctype='multipart/form-data'>
        <input type='hidden' name='edit_id' value='<?php echo $edit_id; ?>'>
        <label> Tên Phim </label>
        <input type='text' name='txtNamephim' value='<?php echo $namePhim; ?>' placeholder='Nhập tên phim' required/>
        
        <label> Đạo Diễn </label>
        <input type='text' name='txtdaodien' value='<?php echo $daodien; ?>' placeholder='Nhập tên đạo diễn' required/>
        
        <label> Diễn Viên </label>
        <input type='text' name='txtdienvien' value='<?php echo $dienvien; ?>' placeholder='Nhập tên diễn viên' required/>
        
        <label> Mô Tả </label>
        <textarea name='txtmota' placeholder='Mô tả phim' required><?php echo $mota; ?></textarea>
        
        <label> Giờ Chiếu </label>
        <input type='text' name='txtgiochieu' value='<?php echo $giochieu; ?>' placeholder='Giờ chiếu phim' required/>
        
        <input type='submit' name='update_phim' value='Cập nhật'>
    </form>
</body>
</html>
