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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sachin Enterprises -testimonial </title>
<link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
<style>
.ratingCheck{
display:flex;
transform: rotateY(180deg);
}
.ratingCheck label{
    display:block;
    cursor: pointer;
    width:20px;
    background:white;
}
.ratingCheck label:before{
    content:'\f005';
    font-family: FontAwesome;
    position: relative;
    display: block;
    font-size:15px;
}
.ratingCheck label:after{
    content:"\f005";
    font-family: FontAwesome;
    position: absolute;
    display: block;
    font-size:15px;
    color:#ff344f;
    top:0;
    opacity:0;
    transition:.5s;
    text-shadow:0 2px 5px rgba(0,0,0,.5);
}
.ratingCheck input{
    display:none;
}
.ratingCheck>.fff {
    color:#ffd31d;
}
.pagination .active .fa-circle{
  color:#ff344f !important;
}
</style>
</head>

<body>


    <?php include("include/header.php"); ?>

    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>s</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>s</li>
                </ul>
            </div>
        </div>
    </div>



    <div class="testimonial ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h6>Testimonials</h6>
                <h3>What Our Client Say About Us</h3>
            </div>
            <div class="section-content">
          
                <div class="row justify-content-center">
                <?php 
                        
                        $sql=mysqli_query($conn,"select * from `testimonial`");
                         while($arr=mysqli_fetch_array($sql)){
                        ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="testimonial-card">
                        <div class="stars">
                        <ul class="ratings ratings-three">
                                                   
                                                   <li class="ratingCheck">
                                                   <input type="radio" id="stars5" name="rate" value="5">
                                                   <label for="stars5" <?php if( ($arr['rating'] >=5)){ ?>class="fff"<?php } ?>></label>
                                                   <input type="radio" id="stars4" name="rate" value="4">
                                                   <label for="stars4" <?php if( ($arr['rating'] >= 4)){ ?>class="fff"<?php } ?>></label>
                                                   <input type="radio" id="stars3" name="rate" value="3" >
                                                   <label for="stars3" <?php if( ($arr['rating'] >= 3)){ ?>class="fff"<?php } ?>></label>
                                                   <input type="radio" id="stars2" name="rate" value="2">
                                                   <label for="stars2" <?php if( ($arr['rating'] >= 2)){ ?>class="fff"<?php } ?>></label>
                                                   <input type="radio" id="stars1" name="rate" value="1" >
                                                   <label for="stars1" <?php if( ($arr['rating'] >= 1)){ ?>class="fff"<?php } ?>></label>
                                                   <input type="radio" id="stars1" name="rate" value="1" >
                                                   <label for="stars1" <?php if( ($arr['rating'] >= 1)){ ?>class="fff"<?php } ?>></label>
                                                   
                                                   </li>
                                                   <li><span><?php echo $arr['rating'];?>.0</span></li>
                                               </ul>
                         </div>
                            <i class="flaticon-right-quote"></i>
                           
                            <p><?php echo $arr['message'];?></p>
                            <div class="testimonial-footer">
                                <img src="assets/images/testimonial/tc1.jpg" alt="image">
                                <div class="testimonial-footer-intro">
                                    <h4><?php echo $arr['name'];?></h4>
                                    <p><?php echo $arr['position'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php   } ?>
                </div>
            </div>
        </div>
    </div>


<?php include("include/newsletter.php"); ?>

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