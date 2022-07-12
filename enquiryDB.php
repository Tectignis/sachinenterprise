<?php
    include('include/config.php');
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $description=$_POST['description'];
    $service=$_POST['service'];

    $sql=mysqli_query($conn, "INSERT INTO `henquiry`(`name`,`phonenumber`,`email`,`description`,`service`) VALUES('$name','$phonenumber','$email','$description','$service')");

    if( $sql==1){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
