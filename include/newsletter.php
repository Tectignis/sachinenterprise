<?php
include("config.php");

if(isset($_POST['sub'])){

    $name=$_POST['name'];
    $phonenumber=$_POST['phonenumber'];

    $sql=mysqli_query($conn,"INSERT INTO `callback`(`name`,`phonenumber`)
     VALUES('$name','$phonenumber')");
}

?>

<div class="newsletter newsletter-1">
    <div class="container">
        <div class="newsletter-content-area">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="default-section-title">
                        <h6></h6>
                        <h3>GET A CALL</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <form method="POST">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="news-input-card">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="news-input-card">
                                    <input type="text" class="form-control" placeholder="Your Mobile No." name="phonenumber">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="news-input-card">
                                    <button class="default-button" name="sub"><span>Submit</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>