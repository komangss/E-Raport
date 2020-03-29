
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_yudha/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 loginimage bglogin"></div>

				<div class="col-lg-6 loginpage">
					<div class="container">
						<div class="loginform">
							<div class="logintulisan"><strong>User Login</strong></div>
							<form action="<?= BASEURL ?>/auth/login" method="POST">
								<input type="text" name="username" class="form_input" placeholder="Username/Nik/Nis">
								<input type="password" name="password" class="form_input" placeholder="Password">
								<div class="dropdown">
									<select name="role" id="selectRole">
										<option value="">Choose</option>
										<option value="1">Siswa</option>
										<option value="2">Guru</option>
										<option value="3">Admin</option>
									</select>
								</div>
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
</html>