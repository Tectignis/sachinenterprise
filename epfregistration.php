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
header("location:epfregistration.php");
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

    <title>Sachin Enterprise - EPF Registation INR 5999/- Only 4 days</title>
  <link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">
</head>

<body>



    <?php include("include/header.php"); ?>

    <div class="shadow ">
    <div class="container">
      <div class="card" style="border:none">
        <div class="card-body">
        <div class="row">
                   <div class="col-sm-8 col-md-8 col-lg-4 pt-5">
                    <h2 class="title">Apply</h2>
                    <h4 class="subtitle">PF Registation</h4>
                    <p></p>
                    <label for="">Extend Social Security to your employees. Register for Provident Fund. Prices starting <strong>INR 5999/- only.</strong></label>
                  </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <img src="assets\images\registration images\images_33-3.webp" alt="">
                </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card">
              <div class="shadow bg-white rounded">
                  <div class="card-header text-center" style="background-color:red; color:white">
                    <h4 class="card-title">Start With Confidence</h4>
                    <h6>CA/CS Assisted | 4.8/5 Rating</h6>
                  </div>
              <form method="POST">
                <div class="card-body">
                    <div class="form-group pt-2">
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
                    </div>
                    <div class="form-group pt-2">
                       <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
                    </div>
                    <div class="form-group pt-2">
                        <input type="tel" name="phonenumber" class="form-control" id="exampleInputPassword1" placeholder="Phone" minlength="10" maxlength="10" required>
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
                            <button type="submit" class="btn btn-warning" name="submit">GET STARTED</button>
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
                <h3 class="pt-5">EPF Registration</h3>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center pt-5">
                    <div class="col-8">
                        <label>Provident Fund (PF) is one of the main platform of savings in India for nearly all people
                            working in Government, Private or Public sector organizations. It is implemented by the
                            Employees Provident Fund Organization (EPFO) of India. Registration has to be done within
                            One month from the date of hiring 20th employees. PF is the best way to provide social
                            security to the employees.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label>Provident Fund PF is largely an employee benefit scheme prescribed by the Government
                            which provides facilities to the employees of an organization about medical assistance,
                            retirement, education of children, insurance support and housing. It is created with the
                            purpose to provide financial security and stability to employees. </label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Contribution towards EPF</b></label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>1.</b> ontribution to EPF is to be done by both Employer and Employee.</label>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>2.</b> Employer deducts his employees??? share of EPF from his salary.</label>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>3.</b> Employer needs to deposit the amount of his contribution of EPF along with
                            employees deducted share.</label>
                            
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>4.</b>The Employer???s contribution to EPF would be 12% and that of employee???s would be
                            12%.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Why is it necessary to contribute in EPF?</b></label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>1.</b>The PF contribution by an employer will be tax-free.</label>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>2.</b>The amount including the amount interest will be exempt from tax on withdrawal
                            after a specific period.</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <label><b>3.</b>Organizations can also enroll themselves voluntarily under PF laws.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Note:</b> Any delay in registration of EPF (Employee Provident Fund) may result in a
                            penalty.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <label><b>Why Ebizfiling as your service provider for EPF (Employee???s Provident Fund)
                                registration?</b></label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8 pb-5">
                        <label>Ebizfiling is a group of intellectuals. The entire team of Ebizfiling consists of Highly
                            qualified CA, CS, Lawyers and business administrators. Ebizfiling would be a one stop
                            destination for your EPF (Employee???s Provident Fund) registration in India. We also provide
                            services like Start up advisory, Secretarial compliance services, PAN / TAN application, DIN
                            registration, <a target="_blank" href="esicregistration.php" class="text-danger" style="text-decoration:none">ESI
                                registration</a> GST registration, Trademark registration, GST / Income tax return
                            filing and many more. You may get in touch with our compliance manager on <a target="_self"
                                href="tel:9987705688" class="text-danger" style="text-decoration:none">9987705688</a> or email <a target="_blank"
                                href="mailto:info@sachinenterprise.in" class="text-danger" style="text-decoration:none">info@sachinenterprise.in</a>
                            for free consultation and to know more about the services provided by us.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
      <div class="container pb-5">
      <h2 style="text-align:center">Simple Prices | No Surprises</h2>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ESSENTIAL</h4>
                <h3 class="text-danger"><strong >??? 5999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                    <li> PF Registration (employees less than 20).</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ENHANCED</h4>
                <h3 class="text-danger"><strong >??? 12999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                    <ul>
                    <li> Registration (employees less than 20).</li>
                    <li> Return (ECR) for 1 year.</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4  py-2">
            <div class="card h-100">
            <div class="card-header text-center" style="background-color:#000080; color:white">
                <h4 class="card-title">ULTIMATE</h4>
                <h3 class="text-danger"><strong >??? 19999/-</strong></h3>
                <label for="">(All Inclusive)</label>
            </div>
            <div class="card-body">
                  <div class="form-group pt-2">
                  <ul>
                    <li> PF Registration (employees less than 50).</li>
                    <li> PF Return (ECR) for 1 year.</li>
                    </ul>
                  </div>
                </div>
                 <!-- /.card-body -->
                 <div class="card-footer" style="background-color:white; border:none; text-align:center">
                  <button type="submit" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Get a call</button>
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