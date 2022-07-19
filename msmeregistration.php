<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
  $service=$_POST['service'];

$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`phonenumber`,`email`,`service`) 
  VALUES ('$name','$phonenumber','$email','$service')");

if($sql==1){
header("location:gstregistration.php");
}
else
echo 'connection failed';
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Sachin Enterprise - MSME Registation INR 1499/- Only 4 days</title>
  <link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
</head>

<body>



    <?php include("include/header.php"); ?>
    <div class="shadow">                                
    <div class="container">
      <div class="card" style="border:none">
        <div class="card-body">
        <div class="row">
          <div class="col-sm-8 col-md-8 col-lg-4 pt-5">
                <h2 class="title">Get</h2>
                <h4 class="subtitle">MSME Registation</h4>
                <p></p>
                <label for="">Claim your access to Government Subsidies, Priority Lending and a quick start up. Register for MSME/Udyog Aadhar at <strong>INR 1499/- only.</strong></label>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <img src="assets\images\registration images\images_12-3.webp" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card">
              <div class="shadow bg-white rounded">
              <div class="card-header text-center" style="background-color:red; color:white">
                <h4 class="card-title">Start With Confidence</h4>
                <h6>CA/CS Assisted | 4.8/5 Rating</h6>
              </div>
              <form method="post">
              <div class="card-body">
                  <div class="form-group pt-2">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" required>
                  </div>
                  <div class="form-group pt-2">
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email" required>
                  </div>
                  <div class="form-group pt-2">
                  <input type="tel" class="form-control" name="phonenumber" id="exampleInputPassword1" placeholder="Phone" minlength="10" maxlength="10" required>
                  </div>
                  <div class="form-group pt-2">
                    <select required class="form-control" name="service" id="servicesid" >
                       <option value="" disabled selected hidden>Select Service:</option>
                       <option>Pancard</option>
                       <option>Gumasta</option>
                       <option>Gazette</option>
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
    </div>

    <div class="pricing pricing-1 pt-10">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3 class="pt-5">MSME/Udyog Aadhar Registration</h3>
            </div>
            <div class="setion-content">
                         <div class="row justify-content-center pt-5">
                            <div class="col-8">
                                    <label>To avail the benefits under the MSMED Act from Central or State Government and the Banking Sector, MSME Registration is required. MSME stands for micro, small and medium enterprises and any enterprise that falls under any of these three categories. Micro, Small and Medium Enterprises (MSME) sector has emerged as a highly vibrant and dynamic sector of the Indian economy over the last five decades.</label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                         <div class="col-8">
                                <label>On 13th may, 2020 Government of India announced some major relief to the MSMEs. And one of the major relief is that the Government Revised the definition of the MSMe as a whole.</label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                <label><b>Know Now:</b> “How to Start a Micro Business in India?” </label>
                             </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                <label><b>What is the new & Revised definition of MSMe?</b></label>
                             </div>
                        </div>
                        <div class="row justify-content-center pt-3 ">
                            <div class="col-8">
                                 <label>The new definition of MSMe is as follows:</label>
                             </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                              <div class="col-8">
                                 <label><b>Micro Enterprise: </b> Manufacturing and services enterprises with investments up to Rs 1 crore and turnover up to Rs 5 crore will be classified as micro enterprises.</label>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                 <label><b>Small Enterprise:</b> For small enterprises, the investment criteria and the turnover criteria has been revised upwards to Rs 10 crore and Rs 50 crore respectively.</label>
                          </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                 <label><b>Medium Enterprise:</b> The enterprises which have investment up to Rs 20 crore and turnover up to Rs 100 crore will be termed as medium enterprises.</label>
                            </div>
                        </div>
                          <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                <label>The new definition will benefit all the MSMes as they need not worry about growing in size; they will still be able to get quite a lot of benefits which otherwise, as an MSME, they have got</label>
                             </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                             <div class="col-8">
                                    <label>This said new definition of MSMe is a welcome move for the promotion of the Atma Nirbhar Bharat Abhiyan by the Government of India.</label>
                             </div>
                        </div>
                            <div class="row justify-content-center pt-3">
                                <div class="col-8">
                                     <label>Any Micro, Small and medium-sized enterprises in the manufacturing and service sector can obtain MSME Registration. MSME is used interchangeably with SSI, which stands for Small Scale Industries.</label>
                                 </div>
                            </div>
                        <div class="row justify-content-center pt-3">
                             <div class="col-8">
                                 <label>Though the MSME registration is not statutory, it is beneficial for business at it provides a range of benefits such as eligibility for capital investment subsidies, lower rates of interest,  tax subsidies, power tariff subsidies, and other support. You may also avail our e-Xpress service to obtain SSI registration / MSME registration within one working day.</label>
                             </div>
                        </div>
                             <div class="row justify-content-center pt-3">
                                <div class="col-8 pb-5">
                                    <label><a target="_blank" href="http://demo.sachinenterprise.in" class="text-danger" style="text-decoration:none">sachinenterprise.in</a> is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management consultancy services to clients in India and abroad. Registering for SSI/MSME is easy, seamless, cheapest and quickest with <a target="_blank" href="http://demo.sachinenterprise.in" class="text-danger" style="text-decoration:none">sachinenterprise.in</a>!</label>
                                </div>
                        </div>
                        
            </div>
        </div>
    </div>
    <div class="container pb-5">
      <h2 style="text-align:center">MSME Registration Fees</h2>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 1499/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                    <li> SSI/MSME Registration.</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong >₹ 1999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                       <li> Registration (employees lPFess than 20).</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4  py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 8899/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                  <ul>
                    <li> eXpress SSI/MSME Registration (within 24 hours).</li>
                    <li> eXpress Trademark (1 application 1 class) (start ups, proprietorship & small business).</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
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