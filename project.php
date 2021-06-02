<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

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
    <style>
        .home {
            background-image: url("images1/woman.jpg");
            /* background-image: url("images1/banner.jpg"); */
            display: flex;
            height: 100vh;
            color: white;
            overflow: hidden;
            position: relative;
            min-height: 500px;
            background-size: cover;
            background-attachment: fixed;
        }

        /* preloarder */
        #pre-loader {
            position: fixed;
            height: 100vh;
            width: 100vw;
            z-index: 999999;
            background-color: white;
            transition: all 300ms ease-in-out;
        }

        .loader {
            height: 100vh;
            width: 100vw;
            background: url("./images1/loader.svg") center/30rem no-repeat fixed;
        }

        #pre-loader.hide {
            opacity: 0;
            pointer-events: none;
        }

        @media only screen and (max-width: 567px) {
            .loader {
                background-size: 20rem;
            }
        }

        /*  */
        .pr2
 {
  object-fit: cover;
  transition: all 500ms ease-in-out;
  cursor: pointer;
  overflow: hidden;
 }
    </style>
</head>

<body>
    <!-- preloader -->
    <div id="pre-loader">
        <div class="loader"></div>
    </div>
    <!-- navbar -->
    <section>
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar fixed-top navbar-expand-lg nav-light justify-content-center scrolling-navbar bgcolor  font-weight-bolder"
            id="navv">
            <!-- <div id="form">
                <form action="result.php" method="get" enctype="multipart/form-data">
                   <input type="text" name="user_Query" id="sfom" placeholder="Search Product">
                   <input type="submit" name="search" id="sbtn"value="Search">
                </form>
           </div> -->
            <!-- <nav class="navbar navbar-expand-sm bg-light justify-content-center"> -->
            <div class="container">
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
                    data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a href="AdminCrude/Crude.php"><img  src="images1/Admin.png" alt="" style="border-radius: 50%; width: 50px; margin-left: -100px;"></a>
                <a href=""><img id="logoo" src="images2/ecom logo.png" alt=""></a>
                <a class="navbar-brand border border-dark  text-danger " href="#myPage"><b>JDMALL</b></a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="container">
                                <div class="dropdown-menu ">
                                    <a class="dropdown-item text-danger" href="ProductInfo.php">Nike</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">POLO</a>
                                    <div class="dropdown-divider "></div>
                                    <a class="dropdown-item text-danger" href="#">Tomy</a>
                                </div>
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
                        <div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p> <a href="index.php?logout='1'" style="color: black; margin-top:20px" id="lgt">logout</a> </p>
		<?php endif ?>
	</div>
                        <li><a href="javascript:void(0);" class="search"><i class="fas fa-search text-dark m-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- baner -->

    <section class="home" id="home">
        <div class="container-fluid text-white " id="txt">
            <div class="row">
                <div class="col-md-12">
                    <!-- <img alt="First slide" src="images1/woman.jpg"> -->
                    <span>Exclusive Sales</span>
                    <h1>UP TO 50% OFF ON SALES <br><small>
                            <h5>Get all exclusive offers for the season</h5>
                        </small></h1>
                    <h1>Brands Available is <span class="typing">
                            <h1></h1>
                        </span></h1>
                    <br>
                    <a id="vo" href="">View Collection</a>
                </div>
            </div>
        </div>
    </section>

    <!-- promotion -->
    <div class="container" id="Shope_colec">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-right">
                <h2>Shop Collections</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>
        </div>
        <!-- img-rounded -->
        <div class="row text-white ankr text-center">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo1.jpg" alt="">
                    <div class="promotion-content">
                        <h5>FOR MEN</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo2.jpg" alt="">
                    <div class="promotion-content">
                        <h5 class="">CASUAL SHOES</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo3.jpg" alt="">
                    <div class="promotion-content">
                        <h5>FOR WOMEN</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-white ankr" id="pp">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo4.jpg" alt="">
                    <div class="promotion-content">
                        <h5>LEATHER BELTS</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo5.jpg" alt="">
                    <div class="promotion-content">
                        <h5>DESIGNER BAGS</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hhoo">
                    <img class="img-responsive img-thumbnail pr1" src="images1/promo6.jpg" alt="">
                    <div class="promotion-content">
                        <h5>WATCHES</h5>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="newProduct">
        <div class="row">
            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-left">
                <h2>New Products</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>
        </div>
        <div class="row" id="proo">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2 pl-5 ">
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product1.jpg" alt="" data-magnify-src="images1/product1.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">London Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product2.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product2.jpg" alt="" data-magnify-src="images1/product2.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <span class="cancel">$160</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product3.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product3.jpg" alt="" data-magnify-src="images1/product3.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <!-- <span class="cancel">$160</span> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product4.jpg" alt="" data-magnify-src="images1/product4.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <span class="cancel">$160</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="proo">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2 pl-5 ">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product5.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product5.jpg" alt="" data-magnify-src="images1/product5.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product6.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product6.jpg" alt="" data-magnify-src="images1/product6.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <span class="cancel">$160</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product7.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product7.jpg" alt="" data-magnify-src="images1/product7.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <!-- <span class="cancel">$160</span> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2">
                <!-- <img class="img-thumbnail img-responsive " style width="90%" height="90%" src="images1/product8.jpg"
                    alt=""> -->
                <img class="img-thumbnail img-responsive  zoom " style width="90%" height="90%"
                    src="images1/product8.jpg" alt="" data-magnify-src="images1/product8.jpg">
                <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                </ul>
                <!-- fixed-bottom -->
                <div class="bottom text-dark">
                    <a class="" href="">Bambi Print Mini Backpack</a>
                    <div class="price">
                        <span>$150</span>
                        <span class="cancel">$160</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- promo advt -->
    <div class="container">
        <div class="row " id="promo">
            <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 item" data-aos="fade-right">
                <img class="img-responsive"  src="images1/promo7.jpg" alt="">
                <div class="content left ">
                    <span>Exclusive Sales</span>
                    <h3>Spring Collections</h3>
                    <a class="aa" href="">View Collection</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 item" data-aos="fade-left">
                <img class="img-responsive" style width="100%" height="100%" src="images1/promo8.jpg" alt="">
                <div class="content right p-5">
                    <span>New Trending</span>
                    <h3>Designer Bags</h3>
                    <a class="aa" href="">Shop Now </a>
                </div>
            </div>
        </div>
    </div>

     <!-- timer 2 -->
    <div class="container" id="ofer">
        <div class="row">
            <div id="timee2">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4 col-mb-3" data-aos="fade-right">
                        <img src="images2/exclusive.png" id="im"alt="">
                    </div>
                    <div class="col-lg-3"data-aos="fade-up">
                        <p style="color: red;">Exclusively Avaliable on JDMALL</p>
                        <h1>Smart Band <span style="color: green;">50% off</span></h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ut soluta ratione </p>
                        <a href="" id="btnn">Buy Now &#10149;</a>
                    </div> 
                    <div class="col-lg-4 col-sm-6 col-md-4 col-mb-3" data-aos="fade-left">
                        <p id="Time"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card -->
    <div class="profile-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" data-aos="fade-right">
                        <div class="img1"><img src="images2/category-1.jpg" alt=""></div>
                        <div class="img2"><img src="images2/profile-3.jpeg" alt=""></div>
                        <div class="main-text">
                            <h2 class="card-title">Person One</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                eligendi, quod
                                ducimus accusamus dolorum architecto deleniti eius vitae alias ex.</p>
                        </div>
                        <div class="socials">
                            <i class="fab fa-firefox-browser"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-dribbble"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up">
                        <div class="img1"><img src="images2/category-2.jpg" alt=""></div>
                        <div class="img2"><img src="images2/gg1.jpeg" alt=""></div>
                        <div class="main-text">
                            <h2 class="card-title">Person One</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                eligendi, quod
                                ducimus accusamus dolorum architecto deleniti eius vitae alias ex.</p>
                        </div>
                        <div class="socials">
                            <i class="fab fa-firefox-browser"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-dribbble"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-left">
                        <div class="img1"><img src="images2/category-3.jpg" alt=""></div>
                        <div class="img2"><img src="images2/profile-4.jpeg" alt=""></div>
                        <div class="main-text">
                            <h2 class="card-title">Person One</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                eligendi, quod
                                ducimus accusamus dolorum architecto deleniti eius vitae alias ex.</p>
                        </div>
                        <div class="socials">
                            <i class="fab fa-firefox-browser"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-dribbble"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- shope by -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8 text-center m-5 text-justify font-weight-bolder font-italic size"
                data-aos="fade-up">
                <h2>Shop by Brand</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>
        </div>
    </div>
    <!-- slider logo -->
    <div class="container-fluid">
        <div class="glide" id="glide1">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <img src="images1/brand1.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand2.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand3.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand4.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand5.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand6.png" alt="">
                    </li>
                    <li class="glide__slide">
                        <img src="images1/brand7.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- PopUp -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="popup">
                    <div class="popup-content">
                        <div class="popup-close">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="popup-left">
                            <div class="popup-img">
                                <img src="./images2/cat2.jpg" alt="popup">
                            </div>
                        </div>
                        <div class="popup-right">
                            <div class="right-content">
                                <h1>Get Discount <span>30%</span> Off</h1>
                                <p>Sign up to our blogletter and save 30% for you next purchase. No spam, we promise!
                                </p>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email..." class="popup-form">
                                    <a href="#">Subscribe</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <!--search-bar----------------------------------->
    <div class="container-fluid">
        <div class="row">
            <div class="search-bar" id="ssss">
                <!--search-input------->
                <div class="search-input dropdown">
                    <a href="javascript:void(0);" class="search-cancel">
                        <i class="fas fa-times"></i>
                    </a>
                    <input type="text" placeholder="Search For Product" name="" onclick="myFunction()" class="dropbtn" id="myInput" onkeyup="filtreFunction()" />
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#ofer">New Offer</a>
                        <a href="ContectForm.php">Contect Form</a>
                        <a href="#Shope_colec">Shope Colection</a>
                        <a href="#newProduct">New Product</a>
                        <a href="ProductInfo.php">Product Details</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one" data-aos="fade-up">
                        <h3 id="h33">Divinector</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur tempora eligendi minus
                            assumenda alias commodi ullam repellendus laudantium ut ipsa!</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-two"  data-aos="fade-up">
                        <h2 class="h22">Divinector</h2>
                        <ul>
                            <li><a href="#">Event</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Hosting</a></li>
                            <li><a href="#">Carrer</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-three" data-aos="fade-up">
                        <h2 class="h22">Follow Us</h2>
                        <p>PLese Follow us on our Social Media Profile in order to keep update. Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Ducimus, accusamus.</p>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                    <div data-aos="fade-up"class="col-md-3 col-sm-6 col-xs-12 segment-four">
                        <h2 class="h22">Our Newletter</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam, tempore non fugiat
                            magnam dolor molestiae amet eaque optio. Nostrum.</p>
                        <form action="">
                            <input type="email" placeholder="Email@gmail.com">
                            <input type="submit" id="btn" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                        <h2 class="h22">Contect me</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435518.6817809756!2d74.05419636601309!3d31.483220875574446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1619224641028!5m2!1sen!2s"
                            width="1090" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-bottom-text  text-center">All Right reserved by $copy;Divinector jd coding.2021-04-24</p>
    </footer>

</body>
<!-- js link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Glidejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<!-- js link -->
<!-- js file -->
<script src="js/jquery.magnify.js" charset="utf-8"></script>

<!-- text animiton -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="js/project.js"></script>
<script src="js/products.js"></script>
<script src="js/slider.js"></script>
<!-- js file -->
<script>

// Timer 2
var countDownDate = new Date("May 7, 2021 08:10:10").getTime();
    var x = setInterval(function () {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var day = Math.floor(distance / (1000 * 60 * 60 * 20));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 20)) / (100 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60 * 20)) / (100 * 60));
        var secound = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("Time").innerHTML = (day + "D   " + hours + "H   " + minutes + "M    " + secound + "S");

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("Time").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<script>
    function myFunction()
    {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    function filtreFunction()
    {
        var input, filter , ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for(i=0; i<a.length; i++)
        {
            txtValue = a[i].textContent || a[i].innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1)
            {
                a[i].style.display = "";
            }
            else
            {
                a[i].style.display = "none";
            }
        }
    }
 
 </script> 
</html>