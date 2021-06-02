
<!-- User Register Data -->
<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$username = '';
$email = '';


if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die ($mysqli->error());
    
    $_SESSION['message'] = "Record has been Delete!";
    $_SESSION['msg_type'] = "Delete";
    header("location: Crude.php");
}


if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $result =  $mysqli->query("SELECT * FROM users WHERE id=$id") or die ($mysqli->error());
    
    //  if(Count($result)==1)
    //  {
         $row = $result->fetch_array();
         $username = $row['username'];
		 $email =  $row['email'];
    //  }
}


if(isset($_GET['update']))
{

    $username =  $_POST['username'];
	$email = $_POST['email'];
	
    $mysqli->query("UPDATE FROM SET username='$username', email='$email' WHERE id=$id  ") or die ($mysqli->error());
    
    $_SESSION['message'] = "Record has been Update!";
    $_SESSION['msg_type'] = "warning";
    header("location: Crude.php");
}



?>
<!-- User Form Data -->
<?php

// session_start();

$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

$id = 0;
$update = false;


if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM form_data WHERE id=$id") or die ($mysqli->error());
    
    $_SESSION['message'] = "Record has been Delete!";
    $_SESSION['msg_type'] = "Delete";
    header("location: Crude.php");
}

?>
<!-- User Comment Data -->
<?php

// session_start();

$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

$id = 0;
$update = false;


if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM tbl_comment WHERE comment_id=$id") or die ($mysqli->error());
    
    $_SESSION['message'] = "Record has been Delete!";
    $_SESSION['msg_type'] = "Delete";
    header("location: Crude.php");
}

?>