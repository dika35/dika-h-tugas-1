<!DOCTYPE html>
<html>
<head>
	<title>Login Laundry</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
	<div class="container mt-5">
		<?php if ($this->session->has_userdata('error_login')): ?>
			<div class="alert alert-danger">
				<p>Username atau password salah!</p>
			</div>
		<?php endif ?>
		<form action="<?= site_url('CApp/CProsesLogin') ?>" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="password"  placeholder="Password" required>
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="Login">
			</div>
		</form>
	</div>
</body>
</html>