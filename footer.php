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
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-two" data-aos="fade-up">
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
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-four" data-aos="fade-up">
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
<!-- slide -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
<!-- js link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Glidejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<!-- js link -->
<!-- js file -->
<script src="js/jquery.magnify.js" charset="utf-8"></script>

<!-- text animiton -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- <script src="js/project.js"></script> -->
<script src="js/products.js"></script>
<script src="js/slider.js"></script>
 <!-- js file -->
 <!--  -->
 <script src="validation.js"></script>
 <!--  -->
<script>
    
// scrol or navbar 
$(document).ready(function () {
    $(window).scroll(function () {

        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    })
    // slide-up script
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    // toggale menu bar
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });
    // toggale menu bar
    $('.menu-btn').click(function () {
        $('.navbarrr .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    })

});
</script>
</html>