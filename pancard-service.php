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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap link -->

    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
   <title>Sachin Enterprise - Pancard Service</title>
    <link rel="icon" type="image/png" href="admin/logo/<?php echo $arr['select_favicon'];?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</head>
<style>
      a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    #accordion .panel {
        border: none;
        border-radius: 3px;
        box-shadow: none;
        margin-bottom: 15px;
    }

    #accordion .panel-heading {
        padding: 0;
        border: none;
        border-radius: 3px;
    }

    #accordion .panel-title a {
        display: block;
        padding: 12px 15px 12px 50px;
        background: linear-gradient(to bottom, #fefefe, #cdcdcd);
        border: 1px solid #c3c3c3;
        border-radius: 3px;
        font-size: 18px;
        font-weight: bold;
        color: black;
        text-shadow: 1px 1px 1px #fff;
        position: relative;
    }

    #accordion .panel-title a:before {
        content: "\f068";
        font-family: "Font Awesome 5 Free";
        width: 25px;
        height: 25px;
        line-height: 25px;
        border-radius: 50%;
        background: #929191;
        font-size: 12px;
        font-weight: 900;
        color: #fdfbfb;
        text-align: center;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        text-shadow: none;
        position: absolute;
        top: 8px;
        right: 15px;
    }

    #accordion .panel-title a.collapsed:before {
        content: "\f067";
    }

    #accordion .panel-body {
        padding: 10px 15px;
        font-size: 15px;
        color: #222;
        line-height: 27px;
        border: none;
    }
</style>


<body>



    <?php include("include/header.php"); ?>

    <div class="shadow">
        <div class="container">
            <div class="card" style="border:none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-4 pt-5">
                            <h2 class="title ">PAN Card Registration</h2>
                            <h5 class="subtitle  ">Get registration</h5>
                            <p></p>
                            <div class="text-box">
                                <label for="">Make your business Pancard Compliant. Never lose on pancard input credit
                                    ever. Obtain your <strong>Pancard Registration</strong> Online at <strong>INR 499/-
                                        only.</strong></label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4"">
                            <img src="assets/images/employee images/CAF-Header-image.png" alt="">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="card ">
                                <div class=" shadow bg-white rounded">
                                    <div class="card-header text-center" style="background-color:red; color:white">
                                        <h4 class="card-title">Get the Pan Registration</h4>
                                        <h6>CA/CS Assisted | 4.8/5 Rating</h6>
                                    </div>
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-group pt-2">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Name">
                                            </div>
                                            <div class="form-group pt-2">
                                                <input type="email" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group pt-2">
                                                <input type="tel" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Phone" minlength="10" maxlength="10">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer"
                                            style="background:white; border:none; text-align:center">
                                            <button type="submit" class="btn btn-warning">GET STARTED</button>
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
            <h3 class="pt-5">PAN Card Registration</h3>
        </div>
        <div class="setion-content">
            <div class="row justify-content-center pt-5">
                <div class="col-8">
                    <label>Today more than 80% of people carry PAN cards because it provides a universal identification
                        to all the transactions made by an individual. PAN card or Permanent Account Number card
                        consists of a 10-digit alpha-numeric number issued to the individual by an assessing officer of
                        the Indian Tax Department. PAN Card is a significant document allotted to the country's taxpayer
                        that also serves as identity proof by government organizations. Therefore adults and the working
                        population of the country apply to obtain PAN cards as soon as they secure a job or have a
                        regular source of income.</label>
                </div>
            </div>

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <label> Many individuals find difficulty in filling up the PAN application form and they are also
                        not aware of the entire process of obtaining a PAN card. To help them out several agents are
                        operating across the country to facilitate the application process for the applicants. Thus,
                        individuals who are also looking to help people out can become PAN card agents by registering
                        themselves with the online PAN card agency online at <a target="_blank" class="text-danger"
                            href="http://demo.sachinenterprise.in">info@sachinenterprise.in</a>. </label>
                </div>
            </div>

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <h4>The benefit of Pan Card Agent Registration Service</h4>
                    <label> Starting a PAN card agency is a value-adding proposition, as individuals just need a basic
                        startup such as a PC, printer, scanner, and Internet connection. A PAN card is a necessary
                        document required by almost every person, so PAN card agents do not have to pitch to their
                        customers and the whole market is full of potential customers for a PAN card agency.</b></label>
                    <label>Besides, a PAN card agent can expect high returns without much capital investment. PAN card
                        agents can easily build their business by opening retail outlets, as they just need to register
                        online through sachinenterprise portal and obtain agent registration without any hassle and
                        inconvenience. sachinenterprise is a one-stop-shop solution for all those individuals who are
                        looking to commence their business by starting a PAN card agency or eyeing to become a PAN card
                        agent.</label>
                </div>
            </div>

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <h4>Eligibility Criteria</h4>
                    <label>sachinenterprise allows retailers to become authorized UTI PAN Card agents by simply
                        registering themselves online as UTIITSL PSA agent. Individuals can apply for a PAN card agency,
                        provided they meet the following eligibility criteria:</label>
                    <label>1. Individuals should have successfully cleared class 12th exam.<br>
                        2. They should be above 18 years of age. <br>
                        3. Indian citizen. <br>
                        4. Provide address and date of birth proof <br>
                        5. Possess basic knowledge of computer and the Internet. </label>

                    <label> After meeting the basic eligibility requirements, individuals can open a PAN card agency by
                        filling out a simple form with details like name, e-mail address, mobile number, city, pin code,
                        and provide two passport size photographs.</label>
                </div>
            </div>

            <div class="row justify-content-center pt-3 ">
                <div class="col-8">
                    <h4>How to apply for a PAN Card Agency through sachinenterprise</h4>
                    <label>Retailers just need to fill out the form given on our portal and our sales representatives
                        will connect with them and guide them to becoming UTI PSA agents. After the successful UTI PAN
                        ID registration, agents will be provided with a UTI PAN Agent login that will authorize them for
                        carrying out all the transactions and submit PAN applications on behalf of their
                        customers.</label>
                </div>
            </div>

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <h4>Why choose sachinenterprise for Pan Card Agency?</h4>
                    <label>We are a pioneer PAN card agency provider helping individuals apply for PAN card agent
                        registration for starting an online and authorized PAN card center. Our PAN card services
                        include allotment, issuance, re-issuance, changes, and updates in the PAN card. We have
                        associated with UTI to render 100% reliable and secure PAN card services to our customers. Some
                        of the other key features of our PAN card agent registration service include:</label>
                </div>
            </div>

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <label>1. Commission on each PAN card application</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <label>2. Transparent procedures</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <label>3. Smooth and hassle-free agent registration process</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <label>4. Efficient and Proactive customer services</label>
                </div>
            </div>
            <div class="container pb-5">
        <h3 class="pt-5 text-center">FREQUENTLY ASKED QUESTIONS</h3>
        <div class="row">
            <div class="col-md-12 pt-3">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    What is a PAN Card?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>PAN Card or Permanent Account Number card is a ten-character alphanumeric identifier physical card issued by the income tax department to individuals. This card includes the name, date of birth, and photograph of the person and serves as an identity proof of the person. This card is valid for a lifetime and is unaffected by any change in address. PAN card is essential for all taxpayers and is required for financial transactions and is also used to track the inflow and outflow of money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are the benefits of having a PAN Card?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul>
                                <li> Filing Income Tax Return</li>
                                <li> Tax deduction</li>
                                <li> Claim Tax Refund</li>
                                <li> Open a Demat Account</li>
                                <li> Purchase and Sale of property</li>
                                <li> Buying vehicles, company’s shares, securities</li>
                                <li> Financial transaction of more than Rs. 50,000</li>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the documents required for a PAN Card?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>An ISO certification only certifies standards , it has got nothing to do with permits and licenses. Even though you might have an ISO certification, you still need government and authority permission, permits and licenses to work your business.</p>
                                </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Why does my company need an iso standard?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                            <ul>
                            <b>Individual Applicant</b>
                            <li>Identity proof like Aadhaar, Voter ID, Driving License</li>
                            <li> Address proof</li>
                            </ul>
                            <ul>
                            <b>Indian Companies</b>
                                <li> Registration Certificate copy.</li>
                            </ul>
                            <ul>
                            <b>Firms and Limited Liability Partnerships</b>
                            <li> Registration Certificate copy</li>
                            <li> Partnership Deed copy</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
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