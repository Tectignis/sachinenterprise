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
header("location:tdsreturn-rivision.php");
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
    <title>Sachin Enterprise - Tds Return Rivision | Online at  ???799 in 4 Days</title>
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
                <h2 class="title ">Revise</h2>
                <h5 class="subtitle  ">TDS Returns</h5>
                <p></p>
                <div class="text-box">
                  <label for="">Got TDS Notice from Income Tax Department? File Correction TDS Returns now. Prices starting at <strong>INR 799/- only.</strong></label>
                </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="assets\images\return-img\ezgif.com-gif-maker (1).webp" alt="sachinenterprise">
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
                  <input type="text" class="form-control" name="phonenumber" id="exampleInputPassword1" placeholder="Phone" minlength="10" maxlength="10">
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
        
        
   
    
        <div class="container pt-5">
            <div class="default-section-title default-section-title-middle">
                <h3>TDS Returns Revision File</h3>
                <br>
                <h4>Your need to know</h4>
            </div>
            <div class="setion-content">
                
                    
                        
         
                    <div class="row justify-content-center pt-3">
                    <div class="col-8">               
         <label>
         TDS Return is required to be filed by any person who is liable to deduct tax at source.  A TDS Return is a quarterly statement which has to be submitted to the Income Tax Department of India. Submitting TDS Return is mandatory if you are a deductor. It should contain all details of TDS deducted and deposited by you for a particular quarter. 
</label>
</div>
</div>

            
           
<div class="row justify-content-center pt-3">
                    <div class="col-8">
           <label>You may need to file TDS correction or TDS revision if you have wrongly shown any details in original TDS Returns. Such mistakes can be wrong PAN, wrong date, or short or no tax deduction. In all such cases, in order to ensure seamless credit to the person whose TDS is deducted, you should revise your TDS Return.</label>
</div>
</div>
          
<div class="row justify-content-center pt-3">
                    <div class="col-8">         
           <label>You may also need to revise your TDS return if you have short paid any TDS and received any notice from income tax department. It should be noted that only by paying short deducted TDS, your work is not over. This has to be given effect through a correctly filed TDS statement.
                </label>
</div>
</div>
               
<div class="row justify-content-center pt-3">
                    <div class="col-8">
            <lable>TDS return may be corrected as many times as needed. There is no due date by which a TDS return has to be revised. Hence, as soon as an error is discovered, you should file a correction return.</label>
</div>
</div>
            
          
<div class="row justify-content-center pt-3">
                    <div class="col-8">
            <label>sachinenterprise.in is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management consultancy services to clients in India and abroad. Filing TDS Return Revision is easy, seamless, error-free, cheapest and quickest with sachinenterprise.in! You may get in touch with our compliance manager on <a class="text-danger" href="tel:9987705688" style="text-decoration:none"> 09987705688</a> or email <a target="_blank" class="text-danger" href="http://demo.sachinenterprise.in" style="text-decoration:none">info@sachinenterprise.in</a> for free consultation.</label>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

  






    <div class="container pt-5">
            <h2 style="text-align:center">Simple Prices | No Surprises</h2>
    <div class="card-body">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100 " >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >??? 799/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                  <li> Download of Justification File</li>
                    <li> One TDS Return Revision upto 10 entries</li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class=" card h-100" >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong>??? 1499/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                    <li> Download of Justification File</li>
                    <li> One TDS Return Revision upto 10 entries</li>
                    <li> Reply to Income Tax Notice</li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4  py-2">
            <div class=" card h-100" >
              <div class=" card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >??? 2299/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group ">
                    <ul>
                    <li> Download of Justification File</li>
                    <li> One TDS Return Revision upto 50 entries</li>
                    <li> Issue of Form 16A </li>
                    <li> Reply to Income Tax Notice</li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>li>   


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