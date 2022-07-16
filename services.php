<?php 
include("include/config.php"); 
?>

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
    <title>Sachin Enterprise - services</title>
  <link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
</head>

<body>


    <?php include("include/header.php"); ?>


    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Our Services</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
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
<!-- <div class="service-img">
<a href="service-details.html"><img src="admin/logo/<?php echo $arr['image'];?>" style="height:350px; width:420px;" alt="image"></a>
</div> -->
<div class="service-card-text"style="height:400px; width:420px;">
<div class="service-card-icon">
<img class="shape1" src="assets/images/shape/shape-2.png" alt="image">
<img class="shape2" src="assets/images/shape/shape-2-1.png" alt="image">
<i class="<?php echo $arr['logo'];?>"></i>
</div>
<h4><a href="service-details.html"><?php echo $arr['title'];?></a></h4>
<p><?php echo $arr['description'];?></p>
<a class="read-more-btn" href="<?php echo $arr['link'];?>">Apply</a>
</div>
</div>
</div>
<?php  } ?>   
                    

                    
           
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