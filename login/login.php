<?php
include "../koneksi.php";
session_start();
if (isset($_SESSION['username'])) {
	header("location:http://localhost/covid19/pelayanan/checkup.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<style>
	.login100-form-avatar {
		display: block;
		width: 200px;
		height: 200px;
		border-radius: 50%;
		overflow: hidden;
		margin: 0 auto;
	}

	.focus-input100::before {
		content: "";
		display: block;
		position: absolute;
		bottom: -2px;
		left: 0;
		width: 0;
		height: 2px;

		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;

		background: #3f75da;
	}


	.txt2 {
		font-family: Poppins-Regular;
		font-size: 15px;
		color: #3f75da;
		line-height: 1.5;
	}

	.login100-form-btn {
		font-family: Poppins-Medium;
		font-size: 16px;
		color: #fff;
		line-height: 1.2;
		text-transform: uppercase;

		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 20px;
		width: 100%;
		height: 50px;
		background-color: #2f83d1;
		border-radius: 25px;

		box-shadow: 0 10px 30px 0px rgba(95, 170, 255, 0.5);
		-moz-box-shadow: 0 10px 30px 0px rgba(95, 170, 255, 0.5);
		-webkit-box-shadow: 0 10px 30px 0px rgba(95, 170, 255, 0.5);
		-o-box-shadow: 0 10px 30px 0px rgba(95, 170, 255, 0.5);
		-ms-box-shadow: 0 10px 30px 0px rgba(95, 170, 255, 0.5);

		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">

				<span class="login100-form-title p-b-70">
					Welcome
				</span>
				<span class="login100-form-avatar">
					<img src="images/avatar-04.png" alt="AVATAR">
				</span>
				<form action="proses-login.php" method="post">
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
						<input class="input100" type="text" name="username" required >
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>
					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="daftar.php" class="txt2">
								Sign up
							</a>
						</li>
					</ul>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>