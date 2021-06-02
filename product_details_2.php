<?php
 require_once 'header.php';
?>

     <!-- products details -->

     <div class="singl_product">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="images2/gallery-1.jpg" alt="" width="100%" id="productimg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images2/gallery-1.jpg" alt="" class="small_img">
                        </div>
                        <div class="small-img-col">
                            <img src="images2/gallery-2.jpg" alt=""class="small_img">
                        </div>
                        <div class="small-img-col">
                            <img src="images2/gallery-3.jpg" alt=""class="small_img">
                        </div>
                        <div class="small-img-col">
                            <img src="images2/gallery-4.jpg" alt=""class="small_img">
                        </div>
                    </div>
                </div>
                <div class="col-5"data-aos="fade-left">
                    <p>Home / T-Shirt</p>
                    <h1>Red Printd T-Shirt by HRX</h1>
                    <h4>$50.00</h4>
                    <select name="" id="">
                        <option value="">Select Size</option>
                        <option value="">XXL</option>
                        <option value="">XL</option>
                        <option value="">Large</option>
                        <option value="">Medium</option>
                        <option value="">Smal</option>
                    </select>
                    <input type="number" value="1">
                    <a href="cards.php"id="btn1">Add To Card</a>
                    <h3 id="det">Products Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
                    <br>
                    <p id="pd">Shop new style summer casual shirts designs 2020 online shopping in Pakistan at cheap price, men summer casual shirts 2020, best summer Casual shirts ...</p>
                </div>
            </div>
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