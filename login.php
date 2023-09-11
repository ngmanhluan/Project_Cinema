<?php
require_once 'database.php';		
$sql = "SELECT * FROM thu2";
$result = $conn->query($sql); 

$prd = 0;
if (isset($_SESSION['cart'])) {
$prd = count($_SESSION['cart']);
}
if(isset($_GET['error'])) {
$error = 'Vui lòng kiểm tra lại tên đăng nhập và mật khẩu của bạn!';
}else
$error = '';
?>

<!DOCTYPE html>
<html>
<head>
<title>Fashion MyLiShop</title>
<meta name="viewport" content = "width=device-width, initial-scale =1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="Hôih My">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="<?php echo $href?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $href?>css/font-awesome.min.css">
<script src="<?php echo $href?>js/jquery.js"></script>
<script src="<?php echo $href?>js/bootstrap.min.js"></script>
<script src="<?php echo $href?>js/jquery-1.9.1.min.js"></script>
<!-- Bootstrap Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $href?>css/style.css">
</head>
<body>
<div class="container" style="margin-top: 150px">
<div class="row">
<div class="col-sm-6 col-md-4 col-md-offset-4">
<div class="panel panel-danger">
<!-- panel-heading -->
<div class="panel-heading">
<center><h4><strong> ĐĂNG NHẬP VÀO TÀI KHOẢN</strong></h4></center>
<p style="color: red"><?php echo $error;?></p>
</div><!-- /panel-heading -->
<!-- panel-body -->
<div class="panel-body">
<form action="login_back.php" method="POST">
<div class="row">
<div class="col-sm-12 col-md-10 col-md-offset-1 ">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user fa-lg"></i>
</span>
<input class="form-control" placeholder="Username" name="username" type="text" required="">
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock fa-lg"></i>
</span>
<input class="form-control" placeholder="Password" name="password" type="password" required="">
</div>
</div>
<div class="form-group">
<input type="submit" class="btn btn-info btn-lg btn-block" name="submit" value="Đăng nhập">
</div>
</div><!-- /col -->
</div><!-- /row -->
</form>
</div><!-- /panel-body -->


</div><!-- /panel panel-danger -->
</div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 150px;
        }

        .panel {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #d9534f;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #d43f3a;
            border-radius: 4px 4px 0 0;
        }

        .panel-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .panel-footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
            border-radius: 0 0 4px 4px;
        }

        .logo {
            width: 200px;
            height: 110px;
        }
    </style>

</body>
</html>