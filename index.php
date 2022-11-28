<?php
session_start();
include 'config.php';


if (isset($_POST['login'])) {
   
$id=$_POST['username'];
$pass= $_POST['pass'];

$sql = mysqli_query($conn,"SELECT * FROM user_login WHERE login_id = '$id' and pass =  BINARY '$pass' ");

if(mysqli_num_rows($sql) == "1"){

$cookie_name = "login_key";
$cookie_value = md5(rand(1,99999999));
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$data = mysqli_fetch_array($sql);


$login_id = $data['login_id'];

$first_time = $data['first_time'] ;
$date=date(" Y-m-d H:i:sa ");

//echo $data['first_time'];

if ($first_time == '0') {
	$sql = mysqli_query($conn,"UPDATE `user_login` SET `first_time`='1', `last_logged`='$date',`login_key`='$cookie_value' WHERE `login_id`='$login_id'  ");
}else{
	$sql = mysqli_query($conn,"UPDATE `user_login` SET  `last_logged`='$date',`login_key`='$cookie_value'  WHERE `login_id`='$login_id' ");
}


$_SESSION['ID_NO']=$data['ID_NO'];
//echo mysqli_error($conn);

header("location:user/index.php");
die();
}else{



$error_code="1";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - <?=$NAME?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/unnamed.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i>	<img  height="110px" src="assets/images/unnamed.png"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
				

						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter ID">
						<input class="input100" type="text" name="username" placeholder="ID No." >
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
<!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
<!--===============================================================================================-->

<?php

if ($error_code=="1") {
?>
<script type="text/javascript">
	
swal("Login Failed!", "Please Check The Credintials ", "error");

</script>

<?php
}
?>

</body>
</html>