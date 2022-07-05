<?php 
include("include/config.php"); 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsome.min.css">
    <link rel="stylesheet" href="assets/fonts/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/barfiller.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Anwa - Cleaning Company HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
</head>

<body>


    <?php include("include/header.php"); ?>


    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Our Services</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="service ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h6>OUR SERVICES</h6>
                <h3>We Provide Best Service</h3>
            </div>
            <div class="section-content">
            <div class="row">
                 <?php 
                        
                        $sql=mysqli_query($conn,"select * from `services`");
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-card">
                            <div class="service-img">
                                <a href="service-details.html"><?php echo $arr['image'];?></a>
                            </div>
                            <div class="service-card-text">
                                <div class="service-card-icon">
                                    <img class="shape1" src="assets/images/shape/shape-2.png" alt="image">
                                    <img class="shape2" src="assets/images/shape/shape-2-1.png" alt="image">
                                    <i class="flaticon-residential"></i>
                                </div>
                                <h4><a href="service-details.html"><?php echo $arr['title'];?></a></h4>
                                <p><?php echo $arr['description'];?></p>
                                <a class="read-more-btn" href="service-details.html">Apply</a>
                            </div>
                        </div>
                    </div>

                    <?php  } ?>
                </div>
                <a class="mt-30 default-button default-button-3 pag-btn" href="services.html"><span>Load More</span></a>
            </div>
        </div>
    </div>


<?php include("newsletter.php"); ?>

    <div class="footer footer-2 ptb-100 bg-000000">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-logo-area">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt="image"></a>
                        <p>Lorem ipsum dolor sit amet, consec tetur elit eiusmod tempor incididunt labore dolore magna
                            aliqua consec tetur adipis cing elite sed do labor.</p>
                        <div class="footer-social-icons">
                            <span>Follow Us:</span>
                            <ul>
                                <li><a href="../../index-35.htm" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="../../index-36.htm" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="../../index-37.htm" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="../../index-38.htm" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-contact-list">
                        <h3>Get In Touch</h3>
                        <div class="footer-content-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>Location:</h5>
                            <p><a
                                    href="../../maps/search/2976 sunrise road las vegas/@36.1246738,-115.4551869,10z/data=!3m1!4b1-2.html">2976
                                    Sunrise Avenue, Las Vegas</a></p>
                        </div>
                        <div class="footer-content-card">
                            <i class="fas fa-envelope"></i>
                            <h5>Email:</h5>
                            <p><a href="/cdn-cgi/l/email-protection#33404643435c414773525d44521d505c5e"><span
                                        class="__cf_email__"
                                        data-cfemail="a0d3d5d0d0cfd2d4e0c1ced7c18ec3cfcd">[email&#160;protected]</span></a>
                            </p>
                        </div>
                        <div class="footer-content-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h5>Phone:</h5>
                            <p><a href="tel:+13454567877">+1-3454-5678-77</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="about.html" target="_blank"><i class="fas fa-angle-right"></i>
                                    <span>About</span></a></li>
                            <li><a href="services.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our
                                        Services</span></a></li>
                            <li><a href="team.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our
                                        Team</span></a></li>
                            <li><a href="blog.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our
                                        Blog</span></a></li>
                            <li><a href="contact.html" target="_blank"><i class="fas fa-angle-right"></i>
                                    <span>Contact</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-newsletter">
                        <h3>Subscribe</h3>
                        <p>Subscribe To Our Newsletter To Get Our Update News!</p>
                        <form>
                            <input type="text" class="form-control" placeholder="Your Email">
                            <button class="default-button" type="submit"><span>Send</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include("include/footer.php"); ?>


    <div class="popup">
        <div class="popup-content">
            <button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
            <form>
                <div class="input-group search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="go-top"><img src="assets/images/png/002-top.png" alt=""></div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-7.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/appear.min.js"></script>

    <script src="assets/js/TweenMax.js"></script>

    <script src="assets/js/odometer.min.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>