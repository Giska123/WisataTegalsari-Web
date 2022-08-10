<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Masuk</title>
<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css" >
</head>

<body>
<form method="POST" action="<?php echo base_url(); ?>admin/login/masuk" >

<div class="login-wrap">
<h2> MASUK </h2>
		<div class="login-form">
			<div class="sign-in-htm">
				<h2>.</h2>
				<div class="group">
					<label for="username" class="label">Username</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input name="password" type="password" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Masuk">
				</div>
			</div>
		
			</div>
		</div>
	</div>

</form>
</body>