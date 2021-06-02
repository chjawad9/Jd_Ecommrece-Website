<?php
 require_once 'header.php';
?>
    <div class="container">
        <div class="row" id="cardprod" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" data-aos="fade-up">
            <div class="col-md-7">
                <h4>Peoduct</h4>
            </div>
            <div class="col-md-3">
                <h4 style="margin-left: 40px;">Qunatity</h4>
            </div>
            <div class="col-md-2">
                <h4 style="float: right;">Subtotal</h4>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class="cart-info p5">
                            <img src="./images1/product1.jpg" alt=""style width="100%" height="100%" />
                          </div>
                          
                    </div>
                    <div class="col-md-5">
                        <div class="p5">
                            <p>Bambi Print Mini Backpack</p>
                            <span>Price: $500.00</span>
                            <br />
                            <a href="#">remove</a>
                          </div>
                    </div>
                </div>
                <div class="row p5" >
                    <div class="col-md-2 ">
                        <div class="cart-info p5">
                            <img src="./images1/product2.jpg" alt=""style width="100%" height="100%" />
                          </div>
                          
                    </div>
                    <div class="col-md-5">
                        <div class="p5">
                            <p>Bambi Print Mini Backpack</p>
                            <span>Price: $500.00</span>
                            <br />
                            <a href="#">remove</a>
                          </div>
                    </div>
                </div>
                <div class="row p5">
                    <div class="col-md-2">
                        <div class="cart-info p5">
                            <img src="./images1/product3.jpg" alt=""style width="100%" height="100%" />
                          </div>
                          
                    </div>
                    <div class="col-md-5">
                        <div class="p5">
                            <p>Bambi Print Mini Backpack</p>
                            <span>Price: $500.00</span>
                            <br />
                            <a href="#">remove</a>
                          </div>
                    </div>
                </div>
                <div class="row p5">
                    <div class="col-md-2">
                        <div class="cart-info p5">
                            <img src="./images1/product4.jpg" alt=""style width="100%" height="100%" />
                          </div>
                          
                    </div>
                    <div class="col-md-5">
                        <div class="p5">
                            <p>Bambi Print Mini Backpack</p>
                            <span>Price: $500.00</span>
                            <br />
                            <a href="#">remove</a>
                          </div>
                    </div>
                </div>
                <div class="row p5">
                    <div class="col-md-2">
                        <div class="cart-info p5">
                            <img src="./images1/product5.jpg" alt=""style width="100%" height="100%" />
                          </div>
                          
                    </div>
                    <div class="col-md-5">
                        <div class="p5">
                            <p>Bambi Print Mini Backpack</p>
                            <span>Price: $500.00</span>
                            <br />
                            <a href="#">remove</a>
                          </div>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <hr style="color:#ff4545;padding: 2px; width: 60%;"> 
                <div class="row">
                    <div class="col-md-6">
                        <h5>Subtotal</h5>
                        <h5 style="margin-top: 20px;">Tax</h5>
                        <h5 style="margin-top: 20px;">Total</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>$200</h5>
                        <h5 style="margin-top: 20px;">$50</h5>
                        <h5 style="margin-top: 20px;">$250</h5>
                    </div>
                </div>
                <button id="btn">Proceed To Checkout</button>
                
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <input  class="value"type="number" value="1" min="1" />
                <input  class="value"type="number" value="1" min="1" />
                <input class="value" type="number" value="1" min="1" />
                <input  class="value"type="number" value="1" min="1" />
                <input class="value" type="number" value="1" min="1" />
                </div>
            </div>
            <div class="col-md-2">
                <h5 class="pricee">$90.0</h5>
                <h5 class="pricee">$60.0</h5>
                <h5 class="pricee">$70.0</h5>
                <h5 class="pricee">$30.0</h5>
                <h5 class="pricee">$40.0</h5>
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