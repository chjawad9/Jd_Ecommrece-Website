<!DOCTYPE html>
<html lang="en">

<head>
    <!-- txtanitmiton -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jd - Ecommrece Website</title>
    <!-- css file -->
    <link rel="stylesheet" href="css/project.css">
    <!-- css file -->
    <!-- Boot sratp links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- zoom file -->
    <link rel="stylesheet" href="css/magnify.css">
    <!-- Boot sratp links -->
    <!-- icons -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <!-- icons -->
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- fonts -->
    <!-- glide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- glide -->
   
     <!-- xoooooooooooooom plus slide-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <style>
        .bgcolor
        {
          background-color: white;
          height: 70px;
        } 
    </style>

</head>

<body>
    <!-- navbar -->
    <section>
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar fixed-top navbar-expand-lg nav-light justify-content-center scrolling-navbar bgcolor  font-weight-bolder"
            id="navv">
            <!-- <nav class="navbar navbar-expand-sm bg-light justify-content-center"> -->
            <div class="container">
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
                    data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a href="AdminCrude/Crude.php"><img  src="images1/Admin.png" alt="" style="border-radius: 50%; width: 50px; margin-left: -100px;"></a>
                <a href=""><img id="logoo" src="images2/ecom logo.png" alt=""></a>
                <a class="navbar-brand border border-dark  text-danger " href="#myPage"><b>JDSHOP</b></a>
                <div class="collapse navbar-collapse " id="navbarColor03">
                    <ul class="navbar-nav" id="ull">

                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Product</a>
                        </li>
                        <!-- <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false" id="shopee">Shope</a>
                            <div class="container">
                                <div class="dropdown-menu ">
                                    <a class="dropdown-item text-danger" href="ProductInfo.php">Nike</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">POLO</a>
                                    <div class="dropdown-divider "></div>
                                    <a class="dropdown-item text-danger" href="#">Tomy</a>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Shope</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" class="in" href="ProductInfo.php">Nike</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" class="in" href="#">POLO</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" class="in" href="#">Tomy</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ContectForm.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginnn.html">Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" class="in" href="#">About</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" class="in" href="#">Contect</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" class="in" href="#">Register</a>
                            </div>
                        </li>
                        <li>
                            <a href="cards.html"><img id="bag" src="images1/shoppingBag.svg" alt="" width="30px"
                                    height="30px" class="m-2"><small class="bg-danger text-white " id="oo"></small></a>
                        </li>
                        <i class="bi bi-box-arrow-left"></i>
                        <li><a href="" class="user"><i class="far fa-user  text-dark m-3"></i></a></li>
       
                        <li><a href="javascript:void(0);" class="search"><i class="fas fa-search text-dark m-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

