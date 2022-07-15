
<?php
include("include/config.php");
                        $sql=mysqli_query($conn,"select * from `general_setting`");
                         $arr=mysqli_fetch_array($sql)
                    
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
    <title>Sachin Enterprise - Contact</title>
  <link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
</head>

<body>

    <?php include("include/header.php"); ?>


    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Contact</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-page ptb-100">
        <div class="container">
            <div class="default-section-title">
                <h6>SEND MESSAGE</h6>
                <h3>We Are Here To Help You</h3>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="contact-card-area">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">

                                    <?php 
                        
                        $sql=mysqli_query($conn,"select * from `general_setting`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h4>Our Location</h4>
                                        <p><?php echo $arr['address'];?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">
                                        <i class="fas fa-phone-alt"></i>
                                        <h4>Our Phone</h4>
                                        <p><?php echo $arr['contact_phone'];?></p>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">
                                        <i class="far fa-envelope"></i>
                                        <h4>Our Email</h4>
                                        <p><?php echo $arr['contact_email'];?></a>
                                        </p>
                                <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="contact-page-form-area">
                            <div class="bd-form details-text-area" id="bd-form">
                                <h3>Send Your Message</h3>
                                <form action="contactDB.php" method="POST" >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none"
                                                role="alert">
                                                Your message was sent successfully.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Name" required=""
                                                id="name" name="name">

                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email" required=""
                                                id="email" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Subject" required=""
                                                id="subject" name="subject">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="tel" class="form-control" placeholder="Phone Number" required=""
                                                id="phonenumber" name="phonenumber" minlength="10" maxlength="10">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control" id="message" name="message"
                                                placeholder="Message" required=""></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="default-button" type="submit" name="save"><span>Send
                                                    Message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="google-map">
        <iframe class="g-map" src=""></iframe>
    </div>

    <?php include("include/newsletter.php"); ?>
    <?php include("include/footer.php"); ?>


    <div class="popup">
        <div class="popup-content">
            <button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
            <form>
                <div class="input-group search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn"><i class="fas fa-search"></i></button>
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