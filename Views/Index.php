<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/CogipLogo.svg"/>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	</head>
	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="login">
						<span>
							<img src="assets/images/CogipLogo.svg">
						</span>
						<span class="login100-form-title p-b-34 p-t-27"></span>
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="userLogin" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="userPassword" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<div class="container-login100-form-btn">
							<button onclick="location.href('/home/andreapinnapicone/docker/docker-lamp/htdocs/my-first-relational-database-app/acceuil.html');" class="login100-form-btn">
								Login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="dropDownSelect1"></div>
	</body>
</html>
