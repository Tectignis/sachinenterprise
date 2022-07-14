<?php
include("include/config.php");
if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
 

$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`phonenumber`,`email`) 
  VALUES ('$name','$phonenumber','$email')");

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>


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
            <div class="col-sm-8 col-md-8 col-lg-4 pt-5">
              <h2 class="title color">Get Online</h2>
              <h5 class="subtitle">GST Registation</h5>
              <p></p>
              <div class="text-box">
                <label for="">Make your business GST Compliant. Never lose on GST input credit ever. Obtain your
                  <strong>GST Registration</strong> Online at <strong>INR 1999/- only.</strong></label>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 ">
              <img src="assets/images/employee images/CAF-Header-image.png" alt="">
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


  <div class="container">
    <div class="default-section-title default-section-title-middle">
      <h3 class="pt-5">GST Registration</h3>
    </div>
    <div class="setion-content">
      <div class="row justify-content-center pt-5">
        <div class="col-8">
          <label><b>GST Registration</b> is applicable on all goods and services except Petroleum products as of now.
            Goods & Service Tax (GST) is a consolidated tax, which essentially means that State and Central Indirect
            taxes have been merged. Entire country now operates under a uniform tax system. It now replaces service tax,
            excise, VAT, entertainment tax, luxury tax, octroi, CST etc.</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label> GST Registration Process in India is completely online. It requires no manual intervention or no
            physical paper submissions. A very simple procedure has been prescribed for GST Registration.</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label> The GST exemption limit earlier was Rs 20 lakhs for all the businesses and services. But now with
            latest amendment Businesses with an annual turnover of up to <b>Rs 40 lakh are exempted from GST.
              Additionally, those with a turnover up to Rs 1.5 crore can opt for the Composition Scheme and pay only 1%
              tax. However, for services the exemption limit of turnover is still 20 lakhs. Also, service provider
              having turnover up to 50 lakhs can opt for composition scheme for services and pay only 6% of
              tax.</b></label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label><b>Hence, it would be compulsory to get GST registered only</b> for traders, manufacturers, businesses,
            individuals, professionals etc, whose turnover (sales) exceed INR 40 Lakh. If your sales are less than INR
            40 Lakh, you may also voluntarily opt for GST Registration in case you wish to avail the benefits of Input
            Tax Credit. Further, all persons who make interstate purchase or sales of services or goods have to apply
            for GST registration. Above limits do not apply to them.</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3 ">
        <div class="col-8">
          <label><b>Aadhaar Card is mandatory to get GST registration:</b></label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          </label> A new system for new GST registration has been introduced and activated from 21st August, 2020 where
          the Aadhaar card is now mandatory for GST registration. That means, the applicant who are seeking for GST
          registration now will be given an option to select if he wishes to authenticate Aadhaar or wishes to opt for
          physical verification. If the applicant opts for Aadhaar authentication for his GST registration then the
          applicant will get his / her GST registration in just three days.</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label><b>Need and Advantages of GST Registration</b></label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label> The GST Registration will confer the following advantages to a taxpayer:</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8">
          <label><b>1.</b> The Taxpayer will be legally recognized as a supplier of goods or services.</label>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <label for=""><b>2.</b>He would be legally authorized to collect tax from his customers and pass on the credit
            of the taxes paid on the goods or services supplied to the purchasers/ recipients.</label>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <label><b>3.</b>He can claim input tax credit of taxes paid on his purchases / procurements and can utilize
            the same for payment of taxes due on supply of goods or services.</label>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <label><b>4.</b>Seamless flow of Input tax credit from suppliers to recipients at the national level</label>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-8 pb-5">
          <label><a target="_blank" href="http://demo.sachinenterprise.in" class="text-danger" style="text-decoration:none"> sachinenterprise.in</a>
            is an eminent business platform and a progressive concept, which helps end-to-end incorporation, compliance,
            advisory, and management consultancy services to clients in India and abroad. GST Registration in India is
            easy, seamless, cheapest and quickest with sachinenterprise.in! Apart from a GST Registration, <a
              target="_blank" href="http://demo.sachinenterprise.in" class="text-danger" style="text-decoration:none">sachinenterprise.in </a> also
            helps you with free GST Advisory, <a target="_blank" href="gst-return.php" class="text-danger" style="text-decoration:none">GST Return
              filing</a>, <a target="_blank" href="tds-return.php" class="text-danger" style="text-decoration:none">TDS Returns filing</a> and a host
            of other services easily. You may get in touch with our compliance manager on <a href="tel:9987705688"
              class="text-danger" style="text-decoration:none">9987705688</a> or email <a href="mailto:info@sachinenterprise.in"
              class="text-danger" style="text-decoration:none">info@sachinenterprise.in</a> for online gst registration and GST Registration
            services. Find out here how to get GST number, how to apply for GST in India and documents required for GST
            registration. GST Registration in India is easy, seamless, cheapest and quickest with <a target="_blank"
              href="http://demo.sachinenterprise.in" class="text-danger" style="text-decoration:none"> sachinenterprise.in</a> !</label>
        </div>
      </div>
    </div>
  </div>



  <!-- </div> -->

  <div class="container pb-5">
    <h2 style="text-align:center">Simple Prices | No Surprises</h2>
    <div class="card-body">
      <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-4 py-2">
          <div class="card h-100">
            <div class="card card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ESSENTIAL</h4>
              <h3 class="text-danger"><strong>₹ 1999/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
              <div class="form-group pt-2">
                <ul>
                  <li>GST Registration for Proprietorship or Partnership or LLP or Private Limited company </li>
                  </ul>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="background-color:white; border:none; text-align:center">
              <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a
                call</button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 py-2">
          <div class=" card h-100">
            <div class="card card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ENHANCED</h4>
              <h3 class="text-danger"><strong>₹ 3299/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
              <div class="form-group pt-2">
                <ul>
                <li>GST Registration for Proprietorship or Partnership or LLP or Private Limited Company</li>
                <li> GST Returns for first three months (upto 10 entries)</li>
                </ul>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="background-color:white; border:none; text-align:center">
              <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a
                call</button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4  py-2">
          <div class=" card  h-100">
            <div class=" card card-header text-center" style="background-color:#000080; color:white">
              <h4 class="card-title">ULTIMATE</h4>
              <h3 class="text-danger"><strong>₹ 8099/-</strong></h3>
              <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
              <div class="form-group ">
                <ul>
                <li> GST Registration for Proprietorship or Partnership or LLP or Private Limited Company</li>
                <li> GST Returns for one year (upto 100 entries)</li>
                </ul>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="background-color:white; border:none; text-align:center">
              <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a
                call</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- </div> -->








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