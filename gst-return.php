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
header("location:gst-return.php");
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
                <h2 class="title ">Your File</h2>
                <h5 class="subtitle ">GST Return File</h5>
                <p></p>
                <div class="text-box">
                <p>File error-free GST Return File and in-time. Get your GST return filings done through experts sachinenterprise.in 
                        Prices start at <strong>INR <span class="package__price">499</span>/- only.</strong></p>
                </div>
                </div>
                <div class="col-4">
                <img src="assets/images/return-img/img.png" alt="sachinenterprise, sachinenterprise.in">
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

    <div class="pricing pricing-1 pt-100 shape-bg">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>GST Return File</h3>
                <h4>Your need to know about GST return filing</h4>
            </div>
            <div class="setion-content">
                            <div class="row justify-content-center">
                            <div class="col-8">
                        <label>GST return filing is completely an online process in India. GST filing 
                             is very easy and quick process. However, it is necessary that returns are filed correctly and error-free to ensure that GST credit can be passed onto the next stage.
                             All you need is GST website login credentials to get started. Once your 
                  <a target="_blank" class="text-danger" href="http:gstregistration.php"> GST registration</a> is done, to file GST return is mandatory. Non-filing of of the same entail heavy penalties.</label>
                </div>
            </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
        
            <label> All registered persons under GST are required to file various returns. Main returns to be filed are GSTR-3B (which is a monthly summary) and GSTR 1 (details of outward supplies).</label>
            </div>
            </div>
                         <div class="row justify-content-center pt-3">
                         <div class="col-8">
              <label>GSTR 3B is to be filed every month by 20th. However, the government has recently introduced QRMP Scheme according to which if the turnover for a business for previous year is up to 5 crores, you can pay your GST on monthly basis and file your GSTR 3B quarterly.</label>
              </div>
            </div>
                         <div class="row justify-content-center pt-3">
                         <div class="col-8">
            <label> Suggested read: QRMP- Quarterly Return filing & Monthly Payment of Taxes – A Scheme for small Taxpayers.</label>
            </div>
            </div>
                         <div class="row justify-content-center pt-3">
                         <div class="col-8">
             <label>  Finally, an annual GST return GSTR 9 must be filed by all GST registered entities on/before the 31st of December.</label>
             </div>
            </div>
                             <div class="row justify-content-center pt-3">
                             <div class="col-8">
         <label>GSTR 4 is to be filed if you have opted for composition scheme. The registered entities will be required to file GST returns even if the entity has not done any business during any period.</label>
         </div>
        </div>
                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
           <label>Additionally there’s yearly GSTR 9C to be filed, which is GST Annual Audit. It is a reconciliation statement which needs to be certified by a practising Chartered Accountants.</label>
           </div>
        </div>
                          <div class="row justify-content-center pt-3">
                          <div class="col-8">
          <label>sachinenterprise.in is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance, advisory, and management consultancy services to clients in India and abroad. Filing online GST Returns is easy, seamless, cheapest and quickest with sachinenterprise.in Apart from online return filing under GST services, 
         sachinenterprise.in also helps you to file Income Tax Returns, TDS Returns, PF Returns and ESI Returns easily.  Contact Ebizfiling to know about GST Return filing process. Inquire for GST return filing service provider for Online GST return, Find out when to file GST return. You may get in touch with our compliance manager on <a class="text-danger" href="tel:9987705688"> 09987705688</a> or email <a target="_blank" class="text-danger" href="http://demo.sachinenterprise.in">info@sachinenterprise.in</a> for free consultation.
        </label>
        </div>
    </div>
                   
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
            <h2 style="text-align:center">GST Return Cost</h2>
            <h5 style="text-align:center">Choose Your Package</h5>
    <div class="card-body">
        <div class="row ">
            <div class="col-4">
            <div class="card h-100" >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >₹ 499/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group pt-2">
                  <label for="">&#8226; Filing of one NIL GST return (GSTR 3B or GSTR 1)</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class=" card h-100" >
              <div class="card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong>₹ 2499/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group pt-2">
                  <label for="">&#8226; GST Annual Return (GSTR 9 or 9A or 9B)</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Call</button>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class=" card  h-100" >
              <div class=" card card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >₹ 6399/-</strong></h3>
                <label for="">(All Inclusive)</label>
              </div>
                <div class="card-body">
                  <div class="form-group ">
                  <label class="card-text">&#8226; GST Returns for one year (all returns included)</label>
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