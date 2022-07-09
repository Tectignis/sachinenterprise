<?php
    include('include/config.php');
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn, "INSERT INTO `contactus`(`name`,`email`,`subject`,`phonenumber`,`message`) VALUES('$name','$email','$subject','$phonenumber','$message')");

    if( $sql==1){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='contact.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
