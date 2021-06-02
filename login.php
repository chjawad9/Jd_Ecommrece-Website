<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<link rel="stylesheet" href="styleeeeee.css">
</head>

<body>

	<div class="login-box">
		<div class="header">
			<h1>Login</h1>
		</div>

		<form method="post" action="login.php">

			<?php include('errors.php'); ?>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Username" id="user" >
			</div>
			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password" id="passwword">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user" id="btnn">Login</button>
			</div>
			<p>
				Not yet a member? <a class="aa" href="register.php">Sign up</a>
			</p>
		</form>

	</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('#btnn').click(function(){

var username=$("#user").val();
var passs=$("#passwword").val();




if(username=="" && passs=="")
{
	alert('All Feild is Required');
}
else if(username=="")
{
	alert('UserName is Required');
}
else if(passs=="")
{
	alert('Password is Required');
}

});
</script>
</html>