
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- txtanitmiton -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Crude</title>
</head>

<body>
                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-right">
                <h2>User Register Data</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>

            <?php require_once 'process.php';?>

            <?php  if(isset($_SESSION['message'])): ?>

            <div class="alert alert-<?=$_SESSION['msg_type']?>">

                <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
           ?>

            </div>
            <?php endif ?>


            <!-- User Register Data -->
            <div class="container">
                <?php
    
        $mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

        $result = $mysqli->query("SELECT * FROM users") or die ($mysqli->error);
        
    ?>

                <div class="row justify-content-center" data-aos="fade-left">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>date</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php while($row = $result->fetch_assoc()):?>
                        <tr>
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['password']; ?>
                            </td>
                            <td>
                                <?php echo $row['date']; ?>
                            </td>
                            <td>
                                <a href="Crude.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                                <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile;?>

                    </table>

                </div>

                <?php
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    
    ?>

                <div class="row justify-content-center" data-aos="fade-up">

                    <form action="process.php" method="POST">


                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>"
                                placeholder='Enter your Name'>
                        </div>
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>"
                                placeholder='Enter your Location'>
                        </div>

                        <div class="form-group">
                            <?php if($update == true): ?>
                            <button type="submit" class="btn btn-info" name="update">Update</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                            <?php endif ?>
                        </div>
                    </form>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-right">
                <h2>User Form Data</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>
                <!-- User Form Data -->
                <div class="container">
                    <?php
    
        $mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

        $result = $mysqli->query("SELECT * FROM form_data") or die ($mysqli->error);
        
    ?>

                    <div class="row justify-content-center" data-aos="fade-left">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company Name</th>
                                    <th>Contact Number</th>
                                    <th>Message</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <?php while($row = $result->fetch_assoc()):?>
                            <tr>
                                <td>
                                    <?php echo $row['Name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Company_Name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Contact_Number']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Message']; ?>
                                </td>
                                <td>
                                    <a href="Crude.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                                    <a href="process.php?delete=<?php echo $row['id'];?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile;?>

                        </table>

                    </div>

                    <?php
        function pre_rr($array)
        {
            echo '<pre>';
            print_rr($array);
            echo '</pre>';
        }
    
    ?>



<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-right">
                <h2>User Comment Data</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>  
                    <!-- User Comment Data -->
                    <div class="container">
                        <?php
    
        $mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

        $result = $mysqli->query("SELECT * FROM tbl_comment") or die ($mysqli->error);
        
    ?>

                        <div class="row justify-content-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>comment_id</th>
                                        <th>Parent Comment id</th>
                                        <th>Comment</th>
                                        <th>Comment Sender Name</th>
                                        <th>date</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <?php while($row = $result->fetch_assoc()):?>
                                <tr>
                                    <td>
                                        <?php echo $row['comment_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['parent_comment_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['comment']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['comment_sender_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['date']; ?>
                                    </td>
                                    <td>
                                        <a href="Crude.php?edit=<?php echo $row['comment_id'];?>"
                                            class="btn btn-info">Edit</a>
                                        <a href="process.php?delete=<?php echo $row['comment_id'];?>"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endwhile;?>

                            </table>

                        </div>

                        <?php
        function pre_rrr($array)
        {
            echo '<pre>';
            print_rrr($array);
            echo '</pre>';
        }
    
    ?>
                    </div>
                </div>

</body>

<!-- text animiton -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>

AOS.init({

// debounceDelay: 50,
// throttleDelay: 99,


offset: 300,
duration: 1000,
// easing: 'ease',
// once: false,
// mirror: false,
// anchorPlacement: 'top-bottom'
});
</script>

</html>