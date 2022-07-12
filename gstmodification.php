<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
 

$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`phonenumber`,`email`) 
  VALUES ('$name','$phonenumber','$email')");

if($sql==1){
header("location:gstmodification.php");
}
else
echo 'connection failed';
}
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


  <title>Anwa - Cleaning Company HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
</head>

<body>

  <?php include("include/header.php"); ?>


  <div class="shadow-lg">
    <div class="container">
      <div class="card" style="border:none">
        <div class="card-body">
          <div class="row">
            <div class="col-4 pt-5">
              <h2 class="title">Modify</h2>
              <h4 class="subtitle">GST Registation</h4>
              <p></p>
              <label for="">Wish to update any details in GST Registration Certificate? Get details modified through us.
                Prices starting at<strong> INR 499/- only.</strong></label>
            </div>
            <div class="col-4">
              <img src="assets/images/employee images/images_18-3.jpg" alt="">
            </div>
            <div class="col-4">
              <div class="card">
                <div class=" shadow bg-white rounded">
                  <div class="card-header text-center" style="background-color:red; color:white">
                    <h4 class="card-title">Start With Confidence</h4>
                    <h6>CA/CS Assisted | 4.8/5 Rating</h6>
                  </div>
                  <form method="post">
                    <div class="card-body">
                      <div class="form-group pt-2">
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name"
                          required>
                      </div>
                      <div class="form-group pt-2">
                        <input type="email" class="form-control" name="email" id="exampleInputPassword1"
                          placeholder="Email" required>
                      </div>
                      <div class="form-group pt-2">
                        <input type="tel" class="form-control" name="phonenumber" id="exampleInputPassword1"
                          placeholder="Phone" minlength="10" maxlength="10" required>
                      </div>
                      <div class="form-group pt-2">
                        <select required class="form-control" name="service" id="servicesid">
                          <option value="" disabled selected hidden>Select Service:</option>
                          <option>Pancard</option>
                          <option>Gumasta</option>
                          <option>Gozette</option>
                          <option>Gst Registration</option>
                          <option>Income Tax Return File</option>
                          <option>Passport</option>
                          <option>Udhyog Aadhar</option>
                          <option>FSSAI License</option>
                          <option>Rent Agreement</option>
                          <option>ISO Certificate</option>
                          <option>Professional Tax Registation</option>
                        </select>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer" style="background:white; border:none; text-align:center">
                      <button type="submit" name="submit" class="btn btn-warning">GET STARTED</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pricing pricing-1">
    <div class="container">
      <div class="default-section-title default-section-title-middle">
        <h3 class="pt-5">GST Modification</h3>
      </div>
      <div class="setion-content">
        <div class="row justify-content-center pt-5">
          <div class="col-8 ">
            <label for="">After receipt of <a target="_blank" href="gstregistration.php" class="text-danger">GST
                Registration</a> Certificate, if you wish to modify any fields such as name, address, email ID, contact
              details, you need to apply for GST Modification request.</label>
          </div>
        </div>
        <div class="row justify-content-center pt-3">
          <div class="col-8">
            <label>GST Modification is divided into two parts: Core Fields and Non-Core Fields. Core Field changes
              require supporting documents to be attached while applying. Non-Core Fields can be updated without
              submitting any proofs.</label>
          </div>
        </div>
        <div class="row justify-content-center pt-3">
          <div class="col-8 pb-5">
            <label>Non-Core Fields include email ID, Phone number, any minor changes, while Core Fields include Change
              in Address, Add a place of Business etc.You may get in touch with our compliance manager on <a
                target="_blank" href="tel:9987705688" class="text-danger">9987705688 </a> or email <a target="_blank"
                href="mailto:info@sachinenterprise.in" class="text-danger">info@sachinenterprise.in</a> for free
              consultation.</label>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container pb-5">
    <h2 style="text-align:center">Simple Prices | No Surprises</h2>
    <div class="card-body">
      <div class="row ">
        <div class="col-4">
          <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ESSENTIAL</h4>
              <h3 class="text-danger"><strong>₹ 499/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <form>
              <div class="card-body">
                <div class="form-group pt-2">
                  <label for="">&#8226; GST Modification in Non-Core Fields like email ID, Phone number, any minor
                    changes</label>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="background-color:white; border:none; text-align:center">
                <button type="submit" class="btn btn-warning" class="btn btn-warning" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">Get a call</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-4">
          <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ENHANCED</h4>
              <h3 class="text-danger"><strong>₹ 1499/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <form>
              <div class="card-body">
                <div class="form-group pt-2">
                  <label for="">&#8226; GST Modification in Core Fields like Change in Address, Add a place of
                    Business</label>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="background-color:white; border:none; text-align:center">
                <button type="submit" class="btn btn-warning" class="btn btn-warning" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">Get a call</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-4">
          <div class="card h-100 ">
            <div class="card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ULTIMATE</h4>
              <h3 class="text-danger"><strong>₹ 1799/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
              <div class="form-group pt-2">
                <label for="">&#8226; Any other GST Modification involving approvals</label>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="background-color:white; border:none; text-align:center">
              <button type="submit" class="btn btn-warning" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Get a call</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <?php include("include/newsletter.php");?>
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