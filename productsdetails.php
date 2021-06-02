<?php
 require_once 'header.php';
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


    <div class="container" id="slides">
        <div class="row">
            <div class="col-md-5">
                <!--  -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" >
                        <div class="carousel-item active">
                            <img src="images1/product1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images1/product4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images1/product7.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



                <!--  -->
            </div>
            <div class="col-md-7"data-aos="fade-left">
                <p class="newarrival">Home/T-shirt</p>
                <h2><strong>Manchester Print Mini Backpack</strong></h2>
                <h4 style="color:coral; margin-top: 20px;">$50</h4>
                <select style="padding: 5px 0px; width: 30%; margin-top: 30px;">
                    <option value="Select Size" selected disabled>
                        Select Size
                    </option>
                    <option value="1">32</option>
                    <option value="2">42</option>
                    <option value="3">52</option>
                    <option value="4">62</option>
                </select><br>
                <!-- <span><i class="fas fa-chevron-down"></i></span> -->
                <input type="text" style="margin-top: 40px; width: 40px; padding: 10px 15px; " placeholder="1" />
                <!-- <a href="cards.html" id="addcrd" 
                    style="text-decoration: none;  margin-left: 50px; padding: 10px 50px;  border-radius: 30px;color: white;
  background-color: orangered;">Add
                    to Cart</a> -->
                    <a href="cards.php"id="btn1">Add To Card</a>
                <h3 style="margin-top: 50px;">Product Detail</h3>
                <p style="margin-top: 20px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima
                    delectus nulla voluptates nesciunt quidem laudantium, quisquam
                    voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!
                </p>


            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img class="i zoom"data-aos="fade-right"src="images1/product7.jpg" alt="" data-magnify-src="images1/product7.jpg">
                <img class="i zoom"data-aos="fade-right"src="images1/product2.jpg" alt="" data-magnify-src="images1/product2.jpg">
                <img class="i zoom"data-aos="fade-left"src="images1/product3.jpg" alt="" data-magnify-src="images1/product3.jpg">
                <img class="i zoom"data-aos="fade-left"src="images1/product6.jpg" alt="" data-magnify-src="images1/product6.jpg">
                <!-- <img class="i zoom" src="images1/product7.jpg" alt=""> -->
                <!-- <img  class="i" src="images1/product2.jpg" alt=""> -->
                <!-- <img  class="i" src="images1/product3.jpg" alt="">  -->
                <!-- <img  class="i" src="images1/product6.jpg" alt=""> -->
            </div>
        </div>
        <div class="row"  style="margin-top: 50px;">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 text-center m-5 p-5 text-justify font-weight-bolder font-italic size"
            data-aos="fade-right">
                <h2>Related Products</h2>
                <small class="text-black-50">Select from the premium product and save plenty money</small>
            </div>
            <div class="row" id="proo" style="margin-top: 20px;">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2 pl-5 ">
                    
                </div>
                <div style="margin-left: -150px; " class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2" data-aos="fade-right">
                    
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
                    <div class="bottom text-dark">
                        <a class="" href=""  style="text-decoration: none;">Bambi Print Mini Backpack</a>
                        <div class="price">
                            <span>$150</span>
                            <span class="cancel">$160</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2" data-aos="fade-up">
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
                        <a class="" href=""  style="text-decoration: none;">Bambi Print Mini Backpack</a>
                        <div class="price">
                            <span>$150</span>
                            <!-- <span class="cancel">$160</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pr2" data-aos="fade-left">
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
                        <a class="" style="text-decoration: none;" href="">Bambi Print Mini Backpack</a>
                        <div class="price">
                            <span>$150</span>
                            <span class="cancel">$160</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<!--search-bar----------------------------------->
<div class="container-fluid">
    <div class="row">
        <div class="search-bar" id="ssss">
            <!--search-input------->
            <div class="search-input">
                <input type="text" placeholder="Search For Product" name="search" />
                <!--cancel-btn--->
                <a href="javascript:void(0);" class="search-cancel">
                    <i class="fas fa-times"></i>
                </a>

            </div>
        </div>
    </div>
</div>

<?php
 require_once 'footer.php';
?>