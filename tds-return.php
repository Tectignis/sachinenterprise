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
header("location:tds-return.php");
}
else
echo 'connection failed';
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
                    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <title>Sachin Enterprise - Tds Return</title>
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
                <h2 class="title ">File</h2>
                <h5 class="subtitle  ">TDS Returns</h5>
                <p></p>
                <div class="text-box">
                <p>File error-free TDS Return File and in-time. Get your TDS return filings done through experts sachinenterprise.in 
                        Prices start at <strong>INR <span class="package__price">499</span>/- only.</strong></p>

                </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="assets\images\return-img\ezgif.com-gif-maker (2).webp" alt="sachinenterprises">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
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
        
   
        <div class="container pt-5" >
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
             and quickest with sachinenterprise.in! Apart from TDS returns, sachinenterprise.in! also helps you to file <a target="_blank" class="text-danger" style="text-decoration:none" href="http:gst-return.php"> GST Returns </a>, Income Tax Returns, PF Returns and ESI Returns easily. You may get in touch with sachinenterprise compliance manager 
             on <a class="text-danger" style="text-decoration:none" href="tel:9987705688"> 09987705688</a> or email <a target="_blank" class="text-danger" style="text-decoration:none" href="http://demo.sachinenterprise.in">info@sachinenterprise.in</a> for free consultation.</label>
                    </div>
            </div>
                </div>
            </div>
        </div>
            
  






    <div class="container pt-5">
            <h2 style="text-align:center">Simple Price | No Surprise</h2>
            <h5 style="text-align:center">Choose Your Package</h5>
    <div class="card-body">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100 " >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
              <div class="form-group pt-2">
                <ul>
              <li> Filing of one NIL TDS return (TDS 3B or TDS 1)</label>
              </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class=" card h-100" >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong>₹ 5999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                    <li>TDS Returns for 1st Quarter</li>
                    <li>TDS Returns for 2nd Quarter</li>
                    <li>TDS Returns for 3rd Quarter</li>
                    <li>TDS Returns for 4th Quarter</li>
                    <li>Form 24Q, 26Q and 27Q (as applicable) upto 500 entries for 1 Year</li>
                    <li>Form 16A on a quarterly basis</li>
                    <li>Form 16 on an annual basis for upto 5 employees</li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" >Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4  py-2">
            <div class=" card h-100" >
              <div class=" card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 8999/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group ">
                  <ul>
                  <li> TDS Returns for 1st Quarter</li>
                    <li> TDS Returns for 2nd Quarter</li>
                    <lli> TDS Returns for 3rd Quarter</lli>
                    <li> TDS Returns for 4th Quarter</lli>
                    <li> Form 24Q, 26Q and 27Q (as applicable) upto 1000 entries for 1 Year</li>
                    <lli> Form 16A on a quarterly basis</lli>
                    <li> Form 16 on an annual basis for upto 10 employees</li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
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