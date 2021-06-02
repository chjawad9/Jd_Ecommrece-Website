<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		
	 
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (id,username, email, password,date) 
					  VALUES('','$username', '$email', '$password',now())";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			// $_SESSION['success'] = "You are now logged in";
			header('location: login.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				// $_SESSION['success'] = "You are now logged in";
				header('location: project.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	// Form Data insert
 
	if (isset($_POST['Form_data'])) {
		
	 
		// receive all input values from the form
		$Namee = mysqli_real_escape_string($db, $_POST['Name']);
		$Emaill = mysqli_real_escape_string($db, $_POST['Email']);
		$CompanyName = mysqli_real_escape_string($db, $_POST['Company_Name']);
		$ContactNumber = mysqli_real_escape_string($db, $_POST['Contact_Number']);
		$Messagee = mysqli_real_escape_string($db, $_POST['Message']);

		// form validation: ensure that the form is correctly filled
		if (empty($Namee)) { array_push($errors, "Name is required"); }
		if (empty($Emaill)) { array_push($errors, "Email is required"); }
		if (empty($CompanyName)) { array_push($errors, "Company Name is required"); }
		if (empty($ContactNumber)) { array_push($errors, "Contect Number is required"); }
		
		if (count($errors) == 0) {
			$query = "INSERT INTO form_data (Name, Email, Company_Name,Contact_Number,Message) 
					  VALUES('$Namee', '$Emaill', '$CompanyName', '$ContactNumber', '$Messagee')";
			mysqli_query($db, $query);
		}

	}



?>