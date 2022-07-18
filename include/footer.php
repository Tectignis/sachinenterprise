<!-- Mail Subscribe -->
<?php
include"include/config.php";
if(isset($_POST['submit'])){
    $status=1;
    $email=$_POST['email'];  
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = 'Sachin Enterprise';
  // $fields = array( 'name' => 'name' );
  $from = 'Sachin Enterprise: 1.0' . "\r\n";
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  
    // $sql=mysqli_query($conn,"INSERT INTO `subscribe`(`email`,`status`) 
    //  VALUES ('$email','$status')");
    //  if($sql=1){
    //    echo "<script>alert('Agent Registered Successfully');</script>";    }
    //  else{
    //    echo "<script>alert('Something Wrong');</script>";
    //  }
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>

<!-- post mail -->
<?php
include("include/config.php");

if(isset($_POST['submit'])){

    $email=$_POST['email'];

    $sql=mysqli_query($conn,"INSERT INTO `subscribe`(`email`)
     VALUES('$email')");
}
?>


<?php
include("include/config.php");

if(isset($_POST['send'])){

 
  $email=$_POST['email'];

  $sql=mysqli_query($conn,"INSERT INTO `enquiry`(`email`) 
  VALUES ('$name',)");
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
                    
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
<div class="footer footer-2 ptb-100 bg-000000">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-logo-area">
<a href="index.php"><img src="admin/logo/<?php echo $arr['select_footerlogo'];?>" alt="image" style="height:55px; width:55px"></a>
<p>One stop source for all government services.</p>
<div class="footer-social-icons">
<span>Follow Us:</span>
<ul>
<li><a href="https://www.facebook.com/tectignisofficial/" target="_blank" style="text-decoration:none"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://www.instagram.com/tectignisofficial/" target="_blank" style="text-decoration:none" ><i class="fab fa-instagram"></i></a></li>
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
<p><a href="#" style="text-decoration:none"><?php echo $arr['address'];?></a></p>
</div>
<div class="footer-content-card">
<i class="fas fa-envelope"></i>
<h5>Email:</h5>
<p><a href="#" style="text-decoration:none"><span class="__cf_email__" ><?php echo $arr['contact_email'];?></span></a></p>
</div>
<div class="footer-content-card">
<i class="fas fa-mobile-alt"></i>
<h5>Phone:</h5>
<p><a href="tel:+91 99877 05688" style="text-decoration:none"><?php echo $arr['contact_phone'];?></a></p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-quick-links">
<h3>Quick Links</h3>
<ul>
<li><a href="index.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>Home</span></a></li>
<li><a href="gstregistration.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>Registration</span></a></li>
<li><a href="gst-return.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>Returns</span></a></li>
<li><a href="about.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>About</span></a></li>
<li><a href="services.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>Services</span></a></li>
<li><a href="contact.php" target="_self" style="text-decoration:none"><i class="fas fa-angle-right"></i> <span>Contact</span></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-newsletter">
 <h3>Subscribe</h3>
<p>Subscribe To Our Get a Call To Get Our Update News!</p>
<form method="post">
<input type="text" class="form-control"  name="email" placeholder="Your Email">
<button class="default-button" type="submit" name="submit"><span>Send</span></button>
</form>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<div class="copyright bg-000000">
    <div class="container">
        <p>Copyright &copy; 2022. <strong>SACHIN ENTERPRISE</strong> All Rights Reserved .</p>
        <!-- <a target="_blank" href="https://tectignis.in/">tectignis.in </a> -->
    </div>
</div>