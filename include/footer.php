<?php 
      include("include/config.php");                  
                        $sql=mysqli_query($conn,"select * from `general_setting`");
                    
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
<div class="footer footer-2 ptb-100 bg-000000">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-logo-area">
<a href="index.php"><img src="admin/logo/<?php echo $arr['select_logo'];?>" alt="image" style="height:55px; width:55px"></a>
<p>Lorem ipsum dolor sit amet, consec tetur elit eiusmod tempor incididunt labore dolore magna aliqua consec tetur adipis cing elite sed do labor.</p>
<div class="footer-social-icons">
<span>Follow Us:</span>
<ul>
<li><a href="https://www.facebook.com/tectignisofficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://www.instagram.com/tectignisofficial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-contact-list">
<h3>Get In Touch</h3>
<div class="footer-content-card">
<i class="fas fa-map-marker-alt"></i>
<h5>Location:</h5>
<p><a href="#"><?php echo $arr['address'];?></a></p>
</div>
<div class="footer-content-card">
<i class="fas fa-envelope"></i>
<h5>Email:</h5>
<p><a href="#"><span class="__cf_email__" ><?php echo $arr['contact_email'];?></span></a></p>
</div>
<div class="footer-content-card">
<i class="fas fa-mobile-alt"></i>
<h5>Phone:</h5>
<p><a href="tel:+91 99877 05688"><?php echo $arr['contact_phone'];?></a></p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-quick-links">
<h3>Quick Links</h3>
<ul>
<li><a href="index.php" target="_blank"><i class="fas fa-angle-right"></i> <span>Home</span></a></li>
<li><a href="#" target="_blank"><i class="fas fa-angle-right"></i> <span>Registration</span></a></li>
<li><a href="#" target="_blank"><i class="fas fa-angle-right"></i> <span>Returns</span></a></li>
<li><a href="about.php" target="_blank"><i class="fas fa-angle-right"></i> <span>About</span></a></li>
<li><a href="services.php" target="_blank"><i class="fas fa-angle-right"></i> <span>Services</span></a></li>
<li><a href="contact.php" target="_blank"><i class="fas fa-angle-right"></i> <span>Contact</span></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-newsletter">
 <h3>Subscribe</h3>
<p>Subscribe To Our Get a Call To Get Our Update News!</p>
<form>
<input type="text" class="form-control" placeholder="Your Email">
<button class="default-button" type="submit"><span>Send</span></button>
</form>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<div class="copyright bg-000000">
    <div class="container">
        <p>Copyright &copy; 2021. <strong>TECTIGNIS IT SOLUTION</strong> All Rights Reserved By <a target="_blank"
                href="https://tectignis.in/">tectignis.in </a></p>
    </div>
</div>