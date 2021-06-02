<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styleeeeee.css">
</head>

<body>
	<div class="login-box">
		<div class="header">
			<h1>Register</h1>
		</div>

		<form method="post" action="register.php" id="registerform">

			<?php include('errors.php'); ?>

			<input type="hidden" name="id" value="<?php echo $id;?>">
			<div class="textbox">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" id="name">
			</div>
			<div class="textbox">
				<label>Email</label>
				<input type="email" name="email" id="email" value="<?php echo $email; ?>">
			</div>
			<div class="textbox">
				<label>Password</label>
				<input type="password" name="password_1" id="password">
			</div>
			<div class="textbox">
				<label>Confirm password</label>
				<input type="password" name="password_2" id="Con_password">
				<small id="confirm_error" class="text-danger"></small>
			</div>
			<div class="input-group">
				<button type="submit" class="btn" id="btnn" name="reg_user">Register</button>
			</div>
			<p>
				Already a member? <a class="aa" href="login.php">Sign in</a>
			</p>
			
		</form>
	</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="validation.js"></script>

</html>