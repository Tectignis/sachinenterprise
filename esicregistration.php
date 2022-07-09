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
header("location:esicregistration.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Anwa - Cleaning Company HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
</head>

<body>



    <?php include("include/header.php"); ?>
    <div class="shadow">
    <div class="container">
      <div class="card" style="border:none">
        <div class="card-body">
        <div class="row">
          <div class="col-4 pt-5">
                <h2 class="title">Apply</h2>
                <h4 class="subtitle">ESI Registation</h4>
                <p></p>
                <label for="">Extend medical benefits to your employees. Register for ESIC. Prices start from <strong>INR 5999/- only.</strong></label>
                </div>
                <div class="col-4">
                <img src="../../sachinenterprise/assets/images/employee images/images_11.jpg" alt="">
            </div>
            <div class="col-4">
            <div class="card">
              <div class="shadow bg-white rounded">
              <div class="card-header text-center" style="background-color:red; color:white">
                <h4 class="card-title">Start With Confidence</h4>
                <h6>CA/CS Assisted | 4.8/5 Rating</h6>
              </div>
              <form method="post">
              <div class="card-body">
                  <div class="form-group pt-2">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group pt-2">
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
                  </div>
                  <div class="form-group pt-2">
                  <input type="tel" class="form-control" name="phonenumber" id="exampleInputPassword1" placeholder="Phone" minlength="10" maxlength="10">
                  </div>
                 
                  <div class="form-group pt-2">
                
                <select required class="form-control" name="service" id="servicesid" >
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
    </div>
    
    <div class="pricing pricing-1  shape-bg">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3 class="pt-5">ESIC Registration</h3>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center pt-5">
                    <div class="col-8">
                        <label>Employee State Insurance Corporation or ESIC Registration is a self-financing social security and health insurance scheme which provides medical benefit, sickness benefit, maternity benefit and various other benefits such as funeral expenses, free supply of physical aids etc. to the employees and their family.</label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label>Any factory or business establishment having 10 or more than 10 employees, irrespective of salary, have to register with ESIC. ESI contributions must be made for all employees having a salary of less than Rs.21,000 per month. Employees with less than Rs. 21,000 monthly wages get health and sickness benefits through this statutory scheme. The state government also contribute 1/8th share cost of the medical benefit. </label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Who needs to register for ESI? (What establishments need ESI registration?)</b></label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label>The following establishments having 10 or more employees attracts ESI coverage.</label>
                        </div>
                        </div>
                        <div class="row justify-content-center">
                    <div class="col-8">
                        <label><b>1.</b>Shops</label>
                        </div>
                        </div>
                        <div class="row justify-content-center ">
                    <div class="col-8">
                             <label><b>2.</b>Hotels or restaurants not having any manufacturing activity, but only engaged in ‘sales’</lable>
                           </div>
                        </div>
                        <div class="row justify-content-center ">
                    <div class="col-8">
                    <label><b>3.</b>Cinemas including preview theaters</label>
                    </div>
                        </div>
                        <div class="row justify-content-center">
                    <div class="col-8">
                    <label><b>4.</b>Road Motor Transport Establishments</label>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                    <div class="col-8">
                    <label><b>4.</b>News paper establishments</label>
                    </div>
                        </div>
                        <div class="row justify-content-center">
                    <div class="col-8">
                    <label><b>6.</b>Private Educational Institutions (those run by individuals, trustees, societies or other organizations and Medical Institutions including Corporate, Joint Sector, trust, charitable, and private ownership hospitals, nursing homes, diagnostic centers, pathological labs)</label>
                         </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Rate of Contribution towards ESIC:</b></label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label>Currently, the employee’s contribution rate towards ESIC (w.e.f. 01.07.2019) is <b>0.75%</b> of the wages and that of the <b>employer’s is 3.25% </b>of the wages paid/payable in respect of the employees in every wage period.
                            However, this rate keeps on changing from time to time. </label>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8">
                            <label><b>Contribution Period and Benefit Period</b></label>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                    <div class="col-8 pb-5">
                        <label>There are two contribution periods each of <b>six months</b> duration and two corresponding benefit periods also of six months duration.
                        <a target="_blank" href="esicregistration.php" class="text-danger">ESIC registration</a> is a statutory responsibility of the employers of the factory. It is mandatory according to the rules and regulation of the ESI Act 1948.
                            EbizFiling.com is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management consultancy services to clients in India and abroad. ESIC registration in India is easy, seamless, cheapest and quickest with EbizFiling.com! Apart from an ESI Registration, <a target="_blank" href="http://demo.sachinenterprise.in" class="text-danger">sachinenterprise.in</a> also helps you with PF Registration, <a target="_blank" href="pf-return.php" class="text-danger">PF Returns </a>, <a target="_blank" href="esi-return.php" class="text-danger">ESI Returns </a>, Trademark Registration and a host of other services easily. You may get in touch with our compliance manager on  <a target="_blank" href="tel:9987705688" class="text-danger"> 9987705688</a> or email  <a target="_blank" href="mailto:info@sachinenterprise.in" class="text-danger">info@sachinenterprise.in</a> for free consultation.</label>
                          </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
      <h2 style="text-align:center">Simple Prices | No Surprises</h2>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 5999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226; ESIC Registration (employees less than 20)</label>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
                </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong >₹ 12999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226; ESIC Registration (employees less than 20)</label>
                    <label for="">&#8226; ESIC Return (ECR) for 1 year</label>

                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
                </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 19999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226; ESIC Registration (employees less than 50)</label>
                    <label for="">&#8226; ESIC Return (ECR) for 1 year</label>

                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
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