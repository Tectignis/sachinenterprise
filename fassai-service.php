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
header("location:fassai-service.php");
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
   <title>Sachin Enterprise - Fassai Service</title>
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
                <h2 class="title ">Fassai Licence</h2>
                <h5 class="subtitle  ">Fassai registration</h5>
                <p></p>
                <div class="text-box">
                  <label for="">Make your business fassai Compliant. Never lose on fassai input credit ever. Obtain your <strong>Fassai Registration</strong> Online at  <strong>INR 1999/- only.</strong></label>
                </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="assets/images/employee images/CAF-Header-image.png" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card ">
            <div class=" shadow bg-white rounded">
              <div class="card-header text-center" style="background-color:red; color:white">
                <h4 class="card-title">Get the FSSAI license</h4>
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
                  <button type="submit"  name="submit" class="btn btn-warning">GET STARTED</button>
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
                <h3 class="pt-5">Fassai Licence</h3>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center pt-5">
                    <div class="col-8">
                        <label>FSSAI registration is mandatory for anyone involved in the food business. Be it food processing, food manufacturing, packaging, distributing, or selling, you need to get an FSSAI registration to run your business.</label>
                    </div>
                    </div>
                <div class="row justify-content-center pt-3">
                        <div class="col-8">
                            <label>The registration/licence is issued by the Food Safety and Standards Authority of India (FSSAI), an institution that monitors food businesses under the guidelines and regulations listed in the FSSAI Act 2006.</label>
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h4>Benefits of FSSAI Registration</h4>
                            <label>Apart from the fact that FSSAI registration is mandatory for your food business, getting it also comes with some benefits: </label>
                                </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                                <label>&#9679; It creates trust and credibility among your customers</label>
                                <label>&#9679; The FSSAI logo is widely recognised and hence it can ensure goodwill among consumers</label>
                                <label>&#9679; Hygiene and cleanliness are regulated and followed when FSSAI registration is involved</label>
                                <label>&#9679; You can create better work policies or improve them through studies that you get access to</label>
                                <label>&#9679; New knowledge about the industry is shared with you which will help you to improve your safety        standards and aid you in reaching the standards of international organisations</label>
                                <label>&#9679; An FSSAI licence is important for importing and exporting food products</label>
                                <label>&#9679;FSSAI is mandatory when you sell food products online</label>
                                <label>&#9679;FSSAI is also responsible for setting guidelines and procedures for quality assurance of the accredited labs as per ISO17025.</label>


                                </div>
                        </div>
                        <div class="row justify-content-center pt-3 ">
                        <div class="col-8">
                          <h4>Who Is Required to Register with the FSSAI?</h4>
                                <label>From hawkers, home vendors to giant food chains everyone operating in the food industry needs to register with FSSAI. Irrespective of whether you are operating online or offline, or whether you are a local player or into the import or export of food products, you need to register with FSSAI. Based on their size and the places they operate, they have to get one of the 3 types of registration/licence that are discussed below.</label>
                                </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                                        </label>If your business falls in any one of the below-listed categories, then a food licence is mandatory for you:</label>
                                </div>
                                </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                            <label>&#9679; Procurement</label> 
                      </div>
                      </div>
                                              <div class="row justify-content-center pt-3">
                                              <div class="col-8">
                                                  <label>&#9679; Manufacture</label>
                      </div>
                      </div>
                      <div class="row justify-content-center pt-3">
                                              <div class="col-8"> 
                                                  <label>&#9679; Distribution</label> 
                      </div>
                      </div>
                      <div class="row justify-content-center pt-3">
                                    <div class="col-8">
                                                  <label>&#9679; Processing</label>
                      </div>
                      </div>

                      <div class="row justify-content-center pt-3">
                              <div class="col-8">
                            <label>&#9679; Packaging</label>
</div>
</div>   
<div class="row justify-content-center pt-3">
                        <div class="col-8">
                            <label>&#9679; Storage</label> 
</div>
</div>
<div class="row justify-content-center pt-3">
                        <div class="col-8">
                            <label>&#9679; Selling</label> 
                            
                        </div>
                      </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                        <label> In other words, an individual or a company that operates with food substances from farm to plate must obtain the FSSAI food licence.</label>
                        </div>
                      </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h4>Penalty for Not Registering</h4>
                          <label>A food business operator (FBO) who runs their business without registering under FSSAI may face imprisonment and an FSSAI licence penalty of up to ₹5 lakhs for the same.</label>
                          </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h4>Types of FSSAI Licence in India</h4>
                          <label>According to the FSSAI Act, 2006 all food businesses are required to be registered/licenced under the following 3 categories:</label>
</div>
</div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h5>FSSAI Registration - Basic</h5>
                          <label>It is the primary kind of registration issued for businesses that are small in turnover – up to ₹12 lakhs approximately per annum</label>
                       <label>Catering businesses irrespective of their turnover have to apply for a state licence and not a basic FSSAI registration.</label>
                        </div>

                      </div>
                      </div>                      
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h5>FSSAI State Licence</h5>
                          <label>Companies that have a profit greater than ₹12 lakhs require a state licence.</label>
                          </div>
                        </div>

                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h5>FSSAI Central Licence</h5>
                          <label>The central registration is for bigger businesses that have a turnover of over ₹20 crores per annum.</label>
                         <label>Companies that supply food to government offices/departments and businesses involved in food import/export, an online platform, operating franchises, or chains of hotels/restaurants have to get a central licence as well.</label>
                        </div>
                        </div> 
                        
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">
                          <h4>Documents Required for FSSAI Registration</h4>
                          <label>Based on different types of registration and the food business that you are running, you have to submit different documents for registration.</labek>
                        </div>
                        </div>
                          <div class="row justify-content-center pt-3">
                        <div class="col-8">  
                        <h5>FSSAI Registration</h5>
                        <label>&#9679; Authorized person’s passport-sizes photograph [self-attested]</label>
                        <label>&#9679; Authorized person’s Aadhar card front and back [self-attested]</label>
                        <label>&#9679; Address proof of the business premises [rental agreement/previous month’s electricity bill/NOC from landlord]</label> 
                        <label>&#9679; Declaration signed by the authorized person</label>
                    
                        </div>
                        </div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8">  
                          <h5>State & Central Licence</h5>
                          <label>&#9679; Passport-sized photograph of the directors/partners/proprietor</label> 
                        <label>&#9679; Identity proof of directors/partners/proprietor [Aadhar and PAN]</label>
                        <label>&#9679; Address proof of the business premises [rental agreement/previous month’s electricity bill/NOC from landlord]</label>
                        <label>&#9679; Photograph of the premises [8-9 photos]</label>
                        <label>&#9679; Blueprint of the premises</label>
                        <label>&#9679; List of food products on the company letterhead [with seal and signature]</label>
                        <label>&#9679; List of machines (if any) on the company’s letterhead [with seal and signature].</label>
                       </div>
                        </div>

                        <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <h5>Manufacturing Units</h5> 
                          <label>&#9679; The blueprint of warehouse, plant, etc.</label>
</div>
</div>
                        <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <label>&#9679; A list of all machinery</label>
</div>
</div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <label>&#9679; Report of a water test</label>
</div>
</div>
                      <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <label>&#9679; List of all food categories</label>
                         
                            </div>
                            </div>
                            <div class="row justify-content-center pt-3">
                        <div class="col-8"> 
                          <h4>Why sachinenterprise</h4>
                          <label>sachinenterprise provides an end-to-end service for food licensing and FSSAI registration. With us you get:</label>
                            </div>
                            </div>
                            <div class="row justify-content-center pt-3">
                            <div class="col-8"> 
                          <label>&#9679; FSSAI registration within the smallest time frame</label>
                            </div>
                            </div>
                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                          <label>&#9679; FSSAI registration within the smallest time frame</label>
                         
                            </div>
                            </div>
                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                          <label>&#9679; Comprehensive help with FSSAI online application filling</label>
                         
                            </div>
                            </div>

                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                          <label>&#9679; Guidance on selecting the right food licence type</label>
                         
                            </div>
                            </div>

                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                          <label>&#9679; Support through the entire registration procedure</label>
                         
                            </div>
                            </div>

                            <div class="row justify-content-center pt-3">
                            <div class="col-8">
                          <label>&#9679; Solution to all your questions and concerns.</label>
                         
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