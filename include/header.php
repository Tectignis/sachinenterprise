
<?php
include("include/config.php");
?>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="topbar-left-side">
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:+919987705688">+919987705688</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="topbar-right-side">
                    <div class="account">
                        <a href="profile-authentication.html"><i class="fas fa-user"></i> Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="header-area">
    <div class="navbar-area">

        <div class="main-responsive-nav">
            <div class="container">
                <div class="mobile-nav">
                    <a href="index.php" class="logo"><img src="assets/images/logo.png" alt="logo"></a>
                    <ul class="menu-sidebar menu-small-device">
                        <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                <?php 
      include("include/config.php");                  
                        $sql=mysqli_query($conn,"select * from `general_setting`");
                    
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                    <a class="navbar-brand" href="index.php">
                        <img src="admin/logo/<?php echo $arr['select_logo'];?>" alt="logo" style="height: 75px; width: 75px;">
                    </a>
                    <?php } ?>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item plus-icon">
                                <a href="index.php" class="nav-link dropdown-toggle ">Home </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link dropdown-toggle">Registration<i  class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item">
                                        <a href="gstregistration.php" class="nav-link dropdown-toggle">GST Registration </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="gstmodification.php" class="nav-link dropdown-toggle">GST Modification</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="gstcancellation.php" class="nav-link dropdown-toggle">GST Cancellation </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="esicregistration.php" class="nav-link dropdown-toggle">ESIC Registration </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="epfregistration.php" class="nav-link dropdown-toggle">EPF Registration</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="msmeregistration.php" class="nav-link dropdown-toggle">MSME / Udyog <br>
                                            Aadhar Registration</a>
                                            </li>
                                </ul>
                            </li>
                            <li class="nav-item plus-icon">
                                <a href="#" class="nav-link dropdown-toggle ">Returns<i  class="fas fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="gst-return.php" class="nav-link dropdown-toggle">GST Return </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="tds-return.php" class="nav-link dropdown-toggle">TDS Return</a>
                                            </li>

                                            <li class="nav-item">
                                        <a href="tdsreturn-rivision.php" class="nav-link dropdown-toggle">TDS Return Revision </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                        <a href="pf-return.php" class="nav-link dropdown-toggle">PF Return </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="esi-return.php" class="nav-link dropdown-toggle">ESI Return </a>
                                            </li>
                                            
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Services<i  class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="pancard-service.php" class="nav-link dropdown-toggle">Pancard </a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="itr-service.php" class="nav-link dropdown-toggle">ITR</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="Services.php" class="nav-link dropdown-toggle">Passport</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="fassai-service.php" class="nav-link dropdown-toggle">FSSAI License</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="Services.php" class="nav-link dropdown-toggle">Rent Agreement</a>
                                            </li>
                                            <li class="nav-item">
                                        <a href="isocertificate.php" class="nav-link dropdown-toggle">ISO Certificate</a>
                                            </li>
                                            <li class="nav-item">
<<<<<<< HEAD
                                        <a href="professionaltaxregi.php" class="nav-link dropdown-toggle">Professional Tax <br>
                                         Registration </a>
                                        <a href="Services.php" class="nav-link dropdown-toggle">Professional Tax</a>
=======
                                        <a href="Services.php" class="nav-link dropdown-toggle">Professional Tax <br>
                                         Registation </a>
                                        
>>>>>>> 5ffe3857c5ac7dcb4ea5cb6952d0b60be82886fc
                                            </li>
                                            
                                </ul>
                            </li>
                            <li class="nav-item plus-icon">
                                <a href="about.php" class="nav-link dropdown-toggle">About Us</a>
                            </li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                        </ul>
                        <div class="menu-sidebar menu-sidebar-1">
                            <ul>
                                <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                               <!-- Button trigger modal -->
                               <button type="button" class="default-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Enquiry
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              
                       
                  
                        <div class="sidebar-card calculate-area mt-30 modal-body">
                 
  
                        <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

                            <form method="post">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <input type="tel" class="form-control" name="phonenumber" placeholder="Your Mobile" minlength="10" maxlength="10">
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                                <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                <select class="form-select" name="service" aria-label="Default select example">
                                    <option selected="" disabled="">Services</option>
                                    <option>Pancard</option>
                                    <option >Gumasta</option>
                                    <option>Gozette</option>
                                    <option >Gst Registration</option>
                                    <option>Income Tax Return File</option>
                                    <option >Passport</option>
                                    <option >Udhyog Aadhar</option>
                                    <option >FSSAI License</option>
                                    <option >Rent Agreement</option>
                                    <option >ISO Certificate</option>
                                    <option>Professional Tax Registation</option>
                                </select>
                                <button class="default-button" name="save" type="submit"><span>Submit</span></button>
                            </form>
                        </div>
                 
                </div>
        </div>
    </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
  
  </div>
</div>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
</div>
</div>