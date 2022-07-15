<?php 
include("include/config.php"); 

if(isset($_POST['save'])){

 
    $name=$_POST['name'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $description=$_POST['description'];
    $service=$_POST['service'];
    
    
  
    $sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`phonenumber`,`email`,`description`,`service`) 
    VALUES ('$name','$phonenumber','$email','$description','$service')");
  }

?>

<?php
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
    <title>Sachin Enterprises -service-details </title>
<link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
</head>

<body>





    <?php include("include/header.php"); ?>


    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Service Details</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="service detials-page ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="details-text-area pr-20">
                        <div class="details-page-img">
                            <img src="assets/images/inner-images/sd1.jpg" alt="image">
                        </div>
                        <h3>About Residential Cleaning And How Does It Work</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
                            laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo. Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Voluptatem necessitatibus dolor placeat fuga deleniti
                            doloremque? Ratione officia quia aliquam possimus.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium sed doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                            quia voluptas sit aspernatur aut odit aut.</p>
                        <h3>Benefits Of Services</h3>
                        <ul class="details-list">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit Facere repellat.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur numquam!</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
                            laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                        <div class="sd-img-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <img src="assets/images/service/s3.jpg" alt="image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <img src="assets/images/service/s2.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
                            laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                    </div>
                </div>
               
                <div class="modal fade" id="exampleModal">
      <div class="modal-dialog">
        <div class="modal-content body2">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-content pt-30">
                       
                  
                        <div class="sidebar-card calculate-area mt-30">
                            <h3>Enquiry Form</h3>
                            <form method="post">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <input type="tel" class="form-control" name="phonenumber" placeholder="Your Mobile" minlength="10" maxlength="10">
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                                <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                <select class="form-select" name="service" aria-label="Default select example">
                                    <option selected="" disabled="">Services</option>
                                    <option>Pancard</option>
                                    <option >Gumasta</option>
                                    <option>Gozette</option>
                                    <option >Gst Registration</option>
                                    <option>Income Tax Return File</option>
                                    <option >Passport</option>
                                    <option >Udhyog Aadhar</option>
                                    <option >FSSAI License</option>
                                    <option >Rent Agreement</option>
                                    <option >ISO Certificate</option>
                                    <option>Professional Tax Registation</option>
                                </select>
                                <button class="default-button" name="save" type="submit"><span>Submit</span></button>
                            </form>
                        </div>
                    
                    </div>
                </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
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