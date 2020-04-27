<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_yudha/style.css">
	<link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_anton/alert.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 loginimage bglogin">
					<img src="<?= BASEURL_PUBLIC; ?>/img/image_yudha/Login.png" alt="">
				</div>
				<div class="col-lg-6 loginpage">
					<div class="container">
						<div class="loginform">
						<?= $flash; ?>
							<div class="logintulisan"><strong>User Login</strong></div>
							<form action="<?= BASEURL; ?>/auth/login" method="POST">
								<input type="text" name="username" class="form_input" placeholder="Username/Nik/Nis">
								<input type="password" name="password" class="form_input" placeholder="Password">
								<div class="button">
									 <button type="submit">LOGIN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= BASEURL_PUBLIC; ?>/js/js_anton/alert.js"></script>
</html>