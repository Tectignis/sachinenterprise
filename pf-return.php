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
                    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
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
                <h2 class="title ">File Your</h2>
                <h5 class="subtitle  ">Pf Returns</h5>
                <p></p>
                <div class="text-box">
                  <label for="">File error-free PF Returns and in-time. File your PF returns through experts sachinenterprise. Prices start at  <strong>INR 999/- only.</strong></label>
                </div>
                </div>
                <div class="col-4">
                <img src="../../sachinenterprise\assets\images\return-img/pfimg.jpg" alt="sachinenterprise">
            </div>
            <div class="col-4">
            <div class="card ">
            <div class=" shadow bg-white rounded">
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
        
        
   
    
    
        <div class="container pt-5">
            <div class="default-section-title default-section-title-middle">
                <h3>What is a Provident Fund Return?</h3>
                <br>
                <h4>Your need to know</h4>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center">
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>Provident Fund:</h5>
</div>
</div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                        <label>Employees Provident Fund (EPF) is a scheme controlled by the Employees’ Provident Funds and Miscellaneous Provisions Act, 1952. It is regulated by Employees’ Provident Fund Organization (EPFO). 
                            PF registration is applicable for all establishment which employs 20 or more persons. PF registration can also be obtained voluntarily by establishments having less than 20 employee.</label>
                        </div>
                        </div>

                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                        <label>Provident fund is a social security system that was introduced for encouraging savings among employees, so as to benefit them during the course of their retirement.</label><br>

                         <label>Contributions are made by the employer and the employee monthly. PF contributions can only be withdrawn by the employee at the time of his/her retirement, barring a few exceptions.</label></br>
                          <label>  All employers having PF registration are responsible to file returns monthly.</label>
                </div>
            </div>
                        
            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                        <h5>Important Points relating to Provident Fund:</h5><br>
                        <b>PF Return : </b> Provident fund return must be filed by all entities having PF registration every month. PF return is due on the <b> 25th of each month.</b> Further, a final PF return is due on the 25th of April for the year ended on 31st March.<br>
                            <b>PF Payment : </b> Provident Fund (PF) payments are due on the 15th of each month. The employer must deposit a total of 12% or 10% of the employee wages towards PF on or before this date every month. For most entities, the PF rate of 12% would be applicable.<br>
                          <b>  UAN : </b> The Employee Provident Fund has launched the Unified Portal to streamline and simplify all aspects of provident fund for both employers and employees. Employees who have the newly allotted UAN can use the Unified Portal for various services.</label><br>
                    </div>
                    </div>
                          
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                            <h5>Due date for Filing PF Returns:</h5>
                            <label>The due date for Monthly Challan remittance to Bank for PF is 15th of Every Month</label><br>
                              <label>  The due date for Monthly PF returns is 15th of subsequent month</label><br>
                              <label>  The due date for yearly returns is 30th April every year.</label><br>
                              <br>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                            <div class="col-8">
                                <h5>Why sachinenterprise as your service provider for filing PF returns?</h5>
                                
                                
                                <label>sachinenterprise.in is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management 
                                consultancy services to clients in India and abroad. Filing PF Returns is easy, seamless, cheaper and quicker with sachinenterprise.in! Apart from PF returns, sachinenterprise.in also helps you to file  Income Tax Returns, <a target="_blank" class="text-danger" href="http:tds-return.php"> TDS returns </a>, <a target="_blank" class="text-danger" href="http:gst-return.php"> GST Returns </a> and
                                 <a target="_blank" class="text-danger" href="http:esi-return.php"> ESI Returns </a> easily. You may get in touch with our compliance manager on <a class="text-danger" href="tel:9987705688"> 09987705688</a> or email <a target="_blank" class="text-danger" href="http://demo.sachinenterprise.in">info@sachinenterprise.in</a> for free consultation.</label>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    
  

    <div class="container pt-5">
            <h2 style="text-align:center">Simple Prices | No Surprises</h2>
    <div class="card-body">
        <div class="row ">
            <div class="col-4">
            <div class="card card-group " >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group pt-2">
                  <label for="">&#8226;1 PF Return (ECR) upto 10 employees</label>
                    
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Get a Call</button>
                </div>
              </form>
            </div>
            </div>
            <div class="col-4">
            <div class=" card card-group" >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong>₹ 8999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group pt-2">
                  <label for="">&#8226;One Year PF Returns (ECR) upto 20 employees</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Get a Call</button>
                </div>
              </form>
            </div>
            </div>
            <div class="col-4">
            <div class=" card card-group" >
              <div class=" card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 13999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group ">
                  <label for="">&#8226; One Year PF Returns (ECR) upto 50 employees</label>


                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Get a Call</button>
                </div>
              </form>
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