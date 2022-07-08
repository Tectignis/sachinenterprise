<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
 

$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`phonenumber`,`email`) 
  VALUES ('$name','$phonenumber','$email')");

if($sql==1){
header("location:tds-return.php");
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
    <title>Anwa - Cleaning Company HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
    <style>

.card-header{
            background-color:#FF7F50;
        }
        .card-primary{
                color:#FFFFFF;
               
        }
        .card-footer{
       background-color:#000080;
        }
        .main-title{
            color:#FF6600;
        }
        .main-title1{
            color:#000080;
        }
        .card-header11{
            background-color:#000080;
        }
        .card-title{
            color:#FF7F50;
        }
        .card-body11{
            color:black;
        }
        
        
        /* .button-footer{
            color:#FF6600;
        } */
        
        </style>
</head>

<body>



    <?php include("include/header.php"); ?>



   




    


    


    <!-- <div class="booking booking-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="booking-content">
<div class="default-section-title">
<h3>Book A Service</h3>
</div>
<div class="section-content">
<form>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<input type="text" class="form-control" placeholder="Your Name">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<input type="Email" class="form-control" placeholder="Email Address">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<input type="text" class="form-control" placeholder="Zip Code">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<input type="text" class="form-control" placeholder="Mobile Number">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<select class="form-select" aria-label="Default select example">
<option selected="" disabled="">Choose A Service</option>
<option value="1">Room Cleaning</option>
<option value="2">Office Cleaning</option>
<option value="3">Ground Cleaning</option>
</select>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<div class="booking-form-content">
<button class="default-button" type="submit"><span>Submit Details</span></button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div> -->
 <div class="shadow p-3 mb-5 bg-white rounded">
<div class="container">
            <div class="card-body">
           
                <div class="row">
				<div class="col-5">
                        <h3 class="main-title">Your File</h3>
                    <h4 class="main-title1">GST Return File</h4>
                    <p>File error-free GST Return File and in-time. Get your GST return filings done through experts sachinenterprise.in 
                        Prices start at <strong>INR <span class="package__price">499</span>/- only.</strong></p>

                </div>

                <div class="col-4">
                <img src="../../sachinenterprise\assets\images\return-img/tdsimg.jpg" alt="sachinenterprise, sachinenterprise.in">
                </div>

                               
                                <div class="col-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                    <h3 class="text-center">Start With Confidence</h3>
                                    <h4 class="text-center">CA/CS Assisted | 4.8/5 Rating</h4>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post">
                                <div class="card-body">
                                
                                <div class="form-group pt-2">
                                    
                                    <input type="name" class="form-control" name="name" id="exampleInputname1" placeholder="Name">
                                </div>
                                <div class="form-group pt-2">
                                    
                                    <input type="email" class="form-control" name="email" id="exampleInputemail1" placeholder="Email">
                                </div>
                                <div class="form-group pt-2">
                                    
                                    <input type="phone" class="form-control" name="phonenumber" id="exampleInputphone1" placeholder="Phone">
                                </div>
                                </div>
                                
                                <!-- /.card-body -->

<<<<<<< HEAD
                                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">GET STARTED</button>
                  
=======
                                <div class="card-footer" style="background:white; border:none; text-align:center">
                  <button type="submit" name="submit" class="btn btn-warning">GET STARTED</button>
>>>>>>> d54bbbe8d2695c2e7a3739aaffc892598ed4e49c
                </div>
                            </form>
      
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
 


   

<div class="pricing pricing-1 pt-100 shape-bg">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>TDS Returns File</h3>
           
                <h4>Your need to know</h4>
            </div>

                <div class="setion-content">
                <div class="row justify-content-center">
                    
                    <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <b>
                        What is TDS Return? </b>
                </div>
            </div>

                <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <label>The TDS stands for tax deducted at source. As per the Income Tax Act, any company or person making a payment is required to deduct tax at source if the payment exceeds certain threshold limits. TDS has to be deducted at the rates prescribed by the tax department and
                    TDS Return needs to be filed in appropriate TDS Return Forms.</label>
            </div>
           </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                    <b> Important notes:</b>
                </div>
                 </div>
              
                 <div class="row justify-content-center pt-3">
                <div class="col-8">
               <label> TDS Return is required to be filed by any person who is liable to deduct tax at source.
                It is a is a quarterly statement which has to be submitted to the Income Tax Department of India.
                Submitting TDS Return is mandatory if you are a deductor.
                It should contain all details of TDS deducted and deposited by you for a particular quarter.</label>
                </div>
                </div> 


                <div class="row justify-content-center pt-3">
                    <div class="col-8">
           <b> Pre-requisites of TDS Return Filing</b>
        </div>
        </div>

                    <div class="row justify-content-center pt-3">
                    <div class="col-8">
        <label>The first requirement for filing a TDS Return is to obtain a valid TAN (Tax Deduction Account Number) and PAN (Permanent Account NumberYou need to assess if you are required to deduct TDS on which payments.
            Transaction details and Payment details.
            Usually, all types of payments such as Salaries, Interest, Professional Fees, Payment to Contractors, Rent of Machinery, Rent of Building etc are covered under liable payments.
            There are prescribed rates for every type of TDS payments under the Income Tax Act, 1961.</label>
            </div>
            </div>

                    <div class="row justify-content-center pt-3">
                    <div class="col-8">
         <b>   Informative Read: <span class="text-danger">DS Rate Chart for FY 2022-23</span></b>
         </div>
     </div>
         

            <div class="row justify-content-center pt-3">
                    <div class="col-8">
            <h5>Types TDS return forms:
            </h5>
            </div>
            </div>

            <div class="row justify-content-center pt-3">
                    <div class="col-8">
            <b>TDS return Form 24Q: </b> Statement for tax deducted at source from salaries<br>
            <b>TDS return Form 26Q: </b>  Statement for tax deducted at source on all payments other than salaries.<br>
            <b>TDS return Form 27Q:</b>Statement for tax deduction on income received from interest,dividends, or any other sum payable to non residents.<br>
            <b>TDS return Form 27EQ:</b> Statement of collection of tax at source.<br>
            </div>
            </div>
                 <div class="row justify-content-center pt-3">
                    <div class="col-8">
          <label>  So If you are a deductor and has made payments to resident Indians with regards to any of above, you should file Form 24Q (TDS on salary payments) and Form 26Q (TDS on payments other than salaries) on a quarterly basis. If you have made any payments to non-residents, you are required to file Form 27Q on a quarterly basis.
            Form 16A and Form 16 (TDS Certificates) can only be generated if you have correctly filed your TDS Returns.</label>
            </div>
            </div>
                 <div class="row justify-content-center pt-3">
                    <div class="col-8">
           <label> sachinenterprise.in! is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management consultancy services to clients in India and abroad. Filing TDS Returns is easy, seamless, cheapest
             and quickest with sachinenterprise.in! Apart from TDS returns, sachinenterprise.in! also helps you to file <a target="_blank" class="text-danger" href="http:gst-return.php"> GST Returns </a>, Income Tax Returns, PF Returns and ESI Returns easily. You may get in touch with sachinenterprise compliance manager 
             on <a class="text-danger" href="tel:9987705688"> 09987705688</a> or email <a target="_blank" class="text-danger" href="http://demo.sachinenterprise.in">info@sachinenterprise.in</a> for free consultation.</label>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
        
    <div class="row">    X
        <div class="container pt-4">
            <h2 style="text-align:center">Simple Prices | No Surprises</h2>
    <div class="card-body"  style="padding-left:350px;">
        <div class="row ">
            <div class="col-4">
            <div class="card ">
            
              <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226; One TDS Return upto 20 entries
</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
                </div>
              </form>
            </div>
            </div>
            <div class="col-4">
            <div class="card">
              <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong >₹ 5999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226;TDS Returns for 1st Quarter</label>
                    <label for="">&#8226;TDS Returns for 2nd Quarter</label>
                    <label for="">&#8226;TDS Returns for 3rd Quarter</label>
                    <label for="">&#8226;TDS Returns for 4th Quarter</label>
                    <label for="">&#8226;Form 24Q, 26Q and 27Q (as applicable) upto 500 entries for 1 Year</label>
                    <label for="">&#8226;Form 16A on a quarterly basis</label>
                    <label for="">&#8226;Form 16 on an annual basis for upto 5 employees</label>
                   
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
                </div>
              </form>
            </div>
            </div>
            <div class="col-4">
            <div class="card">
              <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 8999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <label for="">&#8226; TDS Returns for 1st Quarter</label>
                    <label for="">&#8226; TDS Returns for 2nd Quarter</label>
                    <label for="">&#8226; TDS Returns for 3rd Quarter</label>
                    <label for="">&#8226; TDS Returns for 4th Quarter</label>
                    <label for="">&#8226; Form 24Q, 26Q and 27Q (as applicable) upto 1000 entries for 1 Year</label>
                    <label for="">&#8226; Form 16A on a quarterly basis</label>
                    <label for="">&#8226; Form 16 on an annual basis for upto 10 employees</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning">Check Out</button>
                </div>
              </form>
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
              
    
              