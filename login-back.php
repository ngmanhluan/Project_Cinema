<?php
    require_once 'database.php';		
    $sql = "SELECT * FROM thu2";
    $result = $conn->query($sql); 
    
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = ('$password')";
        $res = mysqli_query($conn,$sql);

        $rows = mysqli_num_rows($res);
        id ($rows > 0)
        {
            $_SESSION['usernameAdmin'] = $username;
            while($row = mysqli_fetch_assoc($conn,$res)) {
                $_SESSION['id-Admin'] = $row['id'];
            }

            header('location:order-list.php');
        }else {
            $_SESSION['error'] = 'tên đăng nhập hoặc mật khẩu không hợp lệ!';

            header('location:./login.php?eror=wrog');
            die('');
            exit();
        }
    }
?>