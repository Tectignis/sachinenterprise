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
header("location:itr-service.php");
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
                    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
   <title>Sachin Enterprise - Gst return</title>
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
                <h5 class="subtitle  ">Income Tax Return</h5>
                <p></p>
                <div class="text-box">
                  <label for="">Filing of Income Tax return is necessary if you have earned any income. File your ITR with sachinenterprise at <strong>INR 1999/- only.</strong></label>
                </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="assets\images\registration images\CAF-Header-image.webp" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card ">
            <div class=" shadow bg-white rounded">
              <div class="card-header text-center" style="background-color:red; color:white">
                <h4 class="card-title">Start With Confidence </h4>
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
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background:white; border:none; text-align:center">
                  <button type="submit" name="submit"  class="btn btn-warning">GET STARTED</button>
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
        
    <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3 class="pt-5">Income Tax Returns</h3>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center pt-5">
                    <div class="col-8">
                        <label> An income tax return is a form where taxpayers have to declare their taxable incomes from all sources, eligible deductions, and tax payments if any. This is called ITR Filing Procedure..</label>
                    </div>
                    </div>
              
                        <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <label>If you have paid more taxes than “payable”, you are entitled to Income tax refund. If the reverse is the case, you should pay remaining amount before filing your Income tax return. Cases, where more taxes have been paid beforehand, are TDS or Advance Tax paid by you. In such a scenario, you should show correct incomes and taxes in your Tax Returns.</label>
</div>
</div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-8">
                            
                          <label>Income tax return forms range from ITR 1 to ITR 7, used for different types of income and different types of entities. Depending on the type of forms, there are various disclosure requirements.</label>
                    </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-8">
                            <label>Filing ITR in India is completely online and paperless. There is no need for you to submit physical return at the local income tax offices. All documents, wherever necessary need to be submitted online. Income tax return is to be filed for a particular Financial Year (i.e. April to March) irrespective of Accounting Year adopted by you.</label>
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